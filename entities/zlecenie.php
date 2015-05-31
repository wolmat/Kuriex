<?php

class Zlecenie{

    public $id;
    public $opis;

    public function  __construct($id, $opis) {

        $this->$id = $id;
        $this->$opis = $opis;

    }
    
}

?>