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

        $query='SELECT * FROM przesylka p INNER JOIN klient k ON p.pesel_odbiorcy = k.pesel_klienta
        INNER JOIN rejon r ON k.id_rejonu = r.id_rejonu WHERE id_przesylki = "'.$id.'"';
                
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