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
        $order = new Order($result);
        
        return $order;
        
    }   
    
    public function deliveryDetails($data){
        $query='
        SELECT 
            p.id_przesylki,
            p.opis,
            CONCAT(odb.imie," ",odb.nazwisko) as odbiorca,
            CONCAT(d.imie," ",d.nazwisko) as dostawca,
            CONCAT(k.imie," ",k.nazwisko) as kurier
        FROM przesylka p 
        INNER JOIN zlecenie z
        ON p.id_zlecenia = z.id_zlecenia
        INNER JOIN dostawca d
        ON p.pesel_dostawcy = d.pesel
        INNER JOIN klient odb
        ON p.pesel_odbiorcy = odb.pesel_klienta
        LEFT JOIN kurier k
        ON p.pesel_kuriera = k.pesel
        WHERE z.id_zlecenia ='.$data['id'];
        
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $deliveries []=$row;
        }
        $select->closeCursor();
        
        return $deliveries ;
    }
}

?>