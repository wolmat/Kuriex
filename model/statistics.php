<?php

include 'model/model.php';

class StatisticsModel extends Model {
     public function getStatistics() {
        $query='SELECT * FROM main';
 
        $select=$this->pdo->query($query);
        
        $result = $select->fetch(PDO::FETCH_ASSOC);
        $select->closeCursor();
 
        return $result;
    }
}

?>