<?php

include 'model/model.php';
include 'entities/zlecenie.php'; 

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

    public function orderDetails($data){
        $query='
        SELECT 
            z.id_zlecenia, z.opis, z.cena, z.rodzaj_platnosci, z.status,
            CONCAT (nad.imie," ",nad.nazwisko) as nadawca
        FROM zlecenie z
        LEFT JOIN klient nad
        ON z.pesel_nadawcy = nad.pesel_klienta
        WHERE nad.pesel_klienta = '.$data['pesel'].' AND z.id_zlecenia = '.$data['id'];


        $select=$this->pdo->query($query);
        
        $result = $select->fetch();
        $select->closeCursor();
        $zlecenie = new Zlecenie($result);
        
        return $zlecenie;
        
    }   
}

?>