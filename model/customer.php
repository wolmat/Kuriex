<?php

require_once 'model/model.php';

class CustomerModel extends Model {
    private $select = "SELECT * FROM klient WHERE pesel_klienta = ?";
    private $selectAll = "SELECT * FROM klient";
    private $insert = "INSERT INTO klient VALUES (?, ?, ?, ?, ?, ?, ?)";
    private $delete = "DELETE FROM klient WHERE pesel_klienta = ?";
    private $update = "UPDATE klient SET
            imie = ?,
            nazwisko = ?,
            adres = ?,
            adres_email = ?,
            telefon_kontaktowy = ?,
            id_rejonu = ? WHERE pesel_klienta = ?";

    public function selectAll(){
        return $this->pdo->query($this->selectAll)->fetchAll();
    }

    public function insertCustomer($customer){
        $query = $this->pdo->prepare($this->insert);
        $query->execute($customer);
    }

    public function deleteCustomer($pesel){
        $query = $this->pdo->prepare($this->delete);
        $query->execute(array($pesel));
    }

    public function updateCustomer($customer){
        $query = $this->pdo->prepare($this->update);
        $query->execute($customer);
    }
}