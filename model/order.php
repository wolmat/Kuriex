<?php

require_once 'model/model.php';

class OrderModel extends Model {
    private $select = "SELECT z.* FROM zlecenie WHERE id_zlecenia = ?";
    private $selectAll = "SELECT *, CONCAT(k.imie,\" \",k.nazwisko) as nadawca 
        FROM zlecenie z 
        INNER JOIN klient k 
        ON k.pesel_klienta = z.pesel_nadawcy";
    private $insert = "INSERT INTO zlecenie VALUES (?, ?, ?, ?, ?, ?)";
    private $delete = "DELETE FROM zlecenie WHERE id_zlecenia = ?";
    
    public function selectAll(){
        return $this->pdo->query($this->selectAll)->fetchAll();
    }
    
    public function selectDeliveries($id){
        $deliveries = "SELECT * FROM przesylka WHERE id_zlecenia = $id";
        return $this->pdo->query($deliveries)->fetchAll();
    }
    
    public function findDelivery($id){
        $find = "SELECT p.*, rn.nazwa AS do, r.nazwa AS od,
        CONCAT(k.imie,\" \",k.nazwisko) AS odbiorca,
        CONCAT(n.imie,\" \",n.nazwisko) AS nadawca,
        CONCAT(kur.imie,\" \",kur.nazwisko) AS kurier
        FROM przesylka p 
        INNER JOIN klient k ON p.pesel_odbiorcy = k.pesel_klienta
        INNER JOIN rejon r ON k.id_rejonu = r.id_rejonu
        INNER JOIN zlecenie z ON p.id_zlecenia = z.id_zlecenia
        INNER JOIN klient n ON z.pesel_nadawcy = n.pesel_klienta
        INNER JOIN rejon rn ON n.id_rejonu = rn.id_rejonu
        INNER JOIN kurier kur ON kur.pesel = p.pesel_kuriera
        WHERE id_przesylki = '$id'";

        return $this->pdo->query($find)->fetch();
    }
    
    public function getAddress($address){
        $prepAddr = str_replace(' ','+',$address);
        $geocode = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$prepAddr&sensor=false");
        $output= json_decode($geocode);
        if(!isset($output->results[0])) return;
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;
        return $lat.', '.$long;
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

    public function deleteOrder($id){
        $query = $this->pdo->prepare($this->delete);
        $query->execute(array($id));
    }
    
    public function selectByEmail($email){
        $query = 'SELECT *, CONCAT(k.imie," ",k.nazwisko) as nadawca 
        FROM zlecenie z 
        INNER JOIN klient k 
        ON k.pesel_klienta = z.pesel_nadawcy
        WHERE k.adres_email = "'.$email.'"';
        return $this->pdo->query($query)->fetchAll();
    }
}