<?php

require_once 'model/model.php';

class CustomerModel extends Model {
    private $select = "SELECT * FROM klient WHERE pesel_klienta = ?";
    private $selectAll = "SELECT * FROM klient";
    private $selectPassword = "SELECT haslo FROM klient WHERE adres_email = :email";
    private $insert = "INSERT INTO klient
    (pesel_klienta, imie, nazwisko, adres, numer_kontaktowy, adres_email, haslo, id_rejonu)
    VALUES (?, ?, ?, ?, ?, ?, null,?)";
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

    public function selectWithPassword($email, $password){
        $query = $this->pdo->prepare($this->selectPassword);
        $query->bindParam(":email", $email);
        $query->execute();
        $user = $query->fetch();
        return $user && hash_equals($user['haslo'], crypt($password, $user['haslo']));
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
    
    public function selectByEmail($email){
        $query = 'SELECT * FROM klient k
        INNER JOIN rejon r
        ON k.id_rejonu = r.id_rejonu
        WHERE adres_email = "'.$email.'"';
        return $this->pdo->query($query)->fetch();
    }
}