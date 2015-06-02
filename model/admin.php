<?php

include 'model/model.php';

class AdminModel extends Model{
   
    public function selectAllCustomers(){
        
        $query='SELECT * FROM klient';
        
        $select=$this->pdo->query($query);
        
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
 
        return $data;  
    }
    
   /* public function selectCustomers($post){
        
        $pesel=NULL;
        if(isset($post['pesel'])
           $pesel=$post['pesel'];
        
        $imie=NULL;
        if(isset($post['imie'])
           $imie=$post['imie'];
        
        $nazwisko=NULL;
        if(isset($post['nazwisko'])
           $nazwisko=$post['nazwisko'];
        
        $adres=NULL;
        if(isset($post['adres'])
           $adres=$post['adres'];
           
        $numer_kontaktowy=NULL;
        if(isset($post['numer_kontaktowy'])
           $numer_kontaktowy=$post['numer_kontaktowy'];
           
        $adres_email=NULL;
        if(isset($post['adres_email'])
           $adres_email=$post['adres_email'];
           
        $id_rejonu=NULL;
        if(isset($post['id_rejonu'])
           $id_rejonu=$post['id_rejonu'];
        
        $query='SELECT * FROM klient WHERE 1';
        if(pesel!=NULL)
        $query=$query.' AND pesel_klienta = '.$pesel;
        if(imie!=NULL)
        $query=$query.' AND pesel_klienta = '.$imie;
        if(nazwisko!=NULL)
        $query=$query.' AND pesel_klienta = '.$nazwisko;
        if(adres!=NULL)
        $query=$query.' AND pesel_klienta = '.$adres;
        if(numer_kontaktowy!=NULL)
        $query=$query.' AND pesel_klienta = '.$numer_kontaktowy;
        if(adres_email!=NULL)
        $query=$query.' AND pesel_klienta = '.$adres_email;
        if(id_rejonu!=NULL)
        $query=$query.' AND pesel_klienta = '.$id_rejonu;
        
        $select=$this->pdo->query($query);
        
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
 
        return $data;  
    }*/
   
}

?>