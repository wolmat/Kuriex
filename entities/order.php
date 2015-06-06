<?php

class Order{

    public $id_zlecenia;
    public $opis;
    public $cena;
    public $rodzaj_platnosci;
    public $status;
    public $nadawca;
    public $pesel_nadawcy;
    public $odbiorca;
    public $dostawca;
    public $przesylki;

    public function  __construct($data, $przesylki) {

        $this->id_zlecenia = $data['id_zlecenia'];
        $this->opis = $data['opis'];
        $this->cena = $data['cena'];
        $this->rodzaj_platnosci = $data['rodzaj_platnosci'];
        $this->status = $data['status'];
        $this->nadawca = $data['nadawca'];            
        $this->pesel_nadawcy = $data['pesel_nadawcy'];            
        $this->przesylki = $przesylki;
        
    }

}

?>