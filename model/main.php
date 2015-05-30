<?php

include 'model/model.php';
 
class MainModel extends Model{
    
     public function statisticsIndex() {
        $query='
        SELECT k.*,p.*, ku.x + d.x
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
        ';
 
        $select=$this->pdo->query($query);
        
        $result = $select->fetch();
        $select->closeCursor();
 
        return $result;
    }

}

?>