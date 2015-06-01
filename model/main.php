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

    public function zlecenieById($data){
        $query='
        SELECT 
            z.id_zlecenia, z.opis, z.cena, z.rodzaj_platnosci, z.status,
            CONCAT (nad.imie," ",nad.nazwisko) as nadawca,
            p.id_przesylki, p.opis,
        CONCAT (odb.imie," ",odb.nazwisko) as odbiorca,
        CONCAT (d.imie," ",d.nazwisko) as dostawca
        FROM zlecenie z
        LEFT JOIN klient nad
        ON z.pesel_nadawcy = nad.pesel_klienta
        LEFT JOIN przesylka p
        ON p.id_zlecenia = p.id_zlecenia
        LEFT JOIN klient odb
        ON p.pesel_odbiorcy = odb.pesel_klienta
        LEFT JOIN dostawca d
        ON p.pesel_dostawcy = d.pesel
        WHERE nad.pesel_klienta = '.$data['pesel'].' AND z.id_zlecenia = '.$data['id'];


        $select=$this->pdo->query($query);
        
        $result = $select->fetch();
        $select->closeCursor();
        $zlecenie = new Zlecenie($result);
        
        return $zlecenie;
        
    }   
}

?>