<?php

require_once 'model/model.php';

class WorkerModel extends Model {
    private $selectCouriers = "SELECT * FROM kurier";
    private $selectSuppliers = "SELECT * FROM dostawca";
    private $deleteCourier = "DELETE FROM kurier WHERE pesel = ?";
    private $deleteSupplier = "DELETE FROM dostawca WHERE pesel = ?";
    private $updateCourier = "UPDATE kurier SET
            pesel = ?,
            imie = ?,
            nazwisko = ?,
            id_obszaru = ?,
            id_pojazdu = ?";
    
    private $updateSupplier = "UPDATE dostawca SET
            pesel = ?,
            imie = ?,
            nazwisko = ?,
            id_filii = ?,
            id_pojazdu = ?";

    public function selectCouriers(){
        return $this->pdo->query($this->selectCouriers)->fetchAll();
    }
    
    public function selectSuppliers(){
        return $this->pdo->query($this->selectSuppliers)->fetchAll();
    }

    public function insertWorker($worker, $type){
        $insert = "INSERT INTO $type VALUES (?,?,?,?,?)";
        $query = $this->pdo->prepare($insert);
        $query->execute($worker);
    }

    public function deleteWorker($pesel, $type){
        $delete = "DELETE FROM $type WHERE pesel = $pesel";     
        $this->pdo->query($delete);
    }

    public function updateWorker($worker){
        $query = $this->pdo->prepare($this->update);
        $query->execute($worker);
    }
}