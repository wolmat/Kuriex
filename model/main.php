<?php

include 'model/model.php';
include 'entities/order.php'; 

class MainModel extends Model{
    
     public function statisticsIndex() {
        $query='
        SELECT k.*,p.*, ku.x + d.x, m.x
        FROM(
            SELECT COUNT(pesel_klienta)
            FROM klient
        ) AS k
        JOIN(
            SELECT COUNT(id_przesylki)
            FROM przesylka
        ) AS p
        JOIN(
            SELECT COUNT(pesel) AS x
            FROM kurier
        ) AS ku
        JOIN(
            SELECT COUNT(pesel) AS x
            FROM dostawca
        ) AS d
        JOIN(
            SELECT COUNT(id_rejonu) AS x
            FROM rejon
        ) AS m
        ';
 
        $select=$this->pdo->query($query);
        
        $result = $select->fetch();
        $select->closeCursor();
 
        return $result;
    }
    
    public function selectDeliveries($id){

        $query='SELECT p.*, rn.nazwa AS do, r.nazwa AS od,
        CONCAT(k.imie," ",k.nazwisko) AS odbiorca,
        CONCAT(n.imie," ",n.nazwisko) AS nadawca,
        CONCAT(kur.imie," ",kur.nazwisko) AS kurier
        FROM przesylka p 
        INNER JOIN klient k ON p.pesel_odbiorcy = k.pesel_klienta
        INNER JOIN rejon r ON k.id_rejonu = r.id_rejonu
        INNER JOIN zlecenie z ON p.id_zlecenia = z.id_zlecenia
        INNER JOIN klient n ON z.pesel_nadawcy = n.pesel_klienta
        INNER JOIN rejon rn ON n.id_rejonu = rn.id_rejonu
        INNER JOIN kurier kur ON kur.pesel = p.pesel_kuriera
        WHERE id_przesylki = "'.$id.'"';
                
        $data = array();
        $select=$this->pdo->query($query);

        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
        
        return $data;  
    }

}

?>