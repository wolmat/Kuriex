<?php

class Zlecenie{

    public $id;
    public $opis;
    public $cena;
    public $rodzaj_platnosci;
    public $status;
    public $nadawca;
    public $odbiorce;
    public $dostawac;
    
        public function  __construct($data) {

            $this->id = $data[0];
            $this->opis = $data[1];
            $this->cena = $data[2];
            $this->rodzaj_platnosci = $data[3];
            $this->status = $data[4];
            $this->nadawca = $data[5];
            $this->odbiorca = $data[6];
            $this->dostawca = $data[7];
        }

}

?>