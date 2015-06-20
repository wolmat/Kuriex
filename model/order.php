<?php

require_once 'model/model.php';

class OrderModel extends Model {
    private $select = "SELECT z.* FROM zlecenie WHERE id_zlecenia = ?";
    private $selectAll = "SELECT *, CONCAT(k.imie,\" \",k.nazwisko) as nadawca 
        FROM zlecenie z 
        INNER JOIN klient k 
        ON k.pesel_klienta = z.pesel_nadawcy";
    private $insert = "INSERT INTO zlecenie VALUES (?, ?, ?, ?, ?, ?)";
    private $delete = "DELETE FROM zlecenie WHERE pesel_klienta = ?";
    
    public function selectAll(){
        return $this->pdo->query($this->selectAll)->fetchAll();
    }
    
    public function selectDeliveries($id){
        $deliveries = "SELECT * FROM przesylka WHERE id_zlecenia = $id";
        return $this->pdo->query($deliveries)->fetchAll();
    }
    
    public function selectPendingOrders(){
        $pending = "SELECT * FROM zlecenie WHERE status = 'oczekuje'";
        return $this->pdo->query($pending)->fetchAll();
    }
    
    public function selectComplains(){
        $complains = "SELECT * FROM reklamacja";
        return $this->pdo->query($complains)->fetchAll();
    }

    public function insertOrder($customer){
        $query = $this->pdo->prepare($this->insert);
        $query->execute($customer);
    }

    public function deleteOrder($pesel){
        $query = $this->pdo->prepare($this->delete);
        $query->execute(array($pesel));
    }
}