<?php

include 'model/model.php';
 
class MainModel extends Model{
    
     public function customerNumber() {
        $query='SELECT COUNT(pesel_klienta) AS result FROM klient';
 
        $select=$this->pdo->query($query);
        
        $result = $select->fetch();
        $select->closeCursor();
 
        return $result;
    }

}

?>