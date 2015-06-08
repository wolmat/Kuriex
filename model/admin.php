<?php

include 'model/model.php';
include 'entities/order.php';

class AdminModel extends Model{
   
    public function selectCustomers($post){
        
        $pesel=NULL;
        if(isset($post['pesel_klienta']))
           $pesel=$post['pesel_klienta'];
        
        $imie=NULL;
        if(isset($post['imie']))
           $imie=$post['imie'];
        
        $nazwisko=NULL;
        if(isset($post['nazwisko']))
           $nazwisko=$post['nazwisko'];
        
        $adres=NULL;
        if(isset($post['adres']))
           $adres=$post['adres'];
           
        $numer_kontaktowy=NULL;
        if(isset($post['numer_kontaktowy']))
           $numer_kontaktowy=$post['numer_kontaktowy'];
           
        $adres_email=NULL;
        if(isset($post['adres_email']))
           $adres_email=$post['adres_email'];
           
        $id_rejonu=NULL;
        if(isset($post['id_rejonu']))
           $id_rejonu=$post['id_rejonu'];
        
        $query='SELECT * FROM klient WHERE 1';
        if($pesel!=NULL)
        $query=$query.' AND pesel_klienta = '.$pesel;
        if($imie!=NULL)
        $query=$query.' AND imie = "'.$imie.'"';
        if($nazwisko!=NULL)
        $query=$query.' AND nazwisko = "'.$nazwisko.'"';
        if($adres!=NULL)
        $query=$query.' AND adres = "'.$adres.'"';
        if($numer_kontaktowy!=NULL)
        $query=$query.' AND numer_kontaktowy = '.$numer_kontaktowy;
        if($adres_email!=NULL)
        $query=$query.' AND adres_email = "'.$adres_email.'"';
        if($id_rejonu!=NULL)
        $query=$query.' AND id_rejonu = '.$id_rejonu;
                
        $data = array();
        $select=$this->pdo->query($query);

            
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
 
        return $data;  
           
    }
    
    
    public function selectWorkers($post){
        
        $pesel=NULL;
        if(isset($post['pesel']))
           $pesel=$post['pesel'];
        
        $imie=NULL;
        if(isset($post['imie']))
           $imie=$post['imie'];
        
        $nazwisko=NULL;
        if(isset($post['nazwisko']))
           $nazwisko=$post['nazwisko'];
        
        $id_miejsca=NULL;
        if(isset($post['id_miejsca']))
           $id_miejsca=$post['id_miejsca'];
        
        $id_pojazdu=NULL;
        if(isset($post['id_pojazdu']))
           $id_pojazdu=$post['id_pojazdu'];

        $function="kurier";
        if(isset($post['function']))
           $function=$post['function'];
 
        $query='SELECT * FROM '.$function.' WHERE 1';
        if($pesel!=NULL)
        $query=$query.' AND pesel = '.$pesel;
        if($imie!=NULL)
        $query=$query.' AND imie = "'.$imie.'"';
        if($nazwisko!=NULL)
        $query=$query.' AND nazwisko = "'.$nazwisko.'"';
        if($id_miejsca!=NULL && $function=="kurier")
        $query=$query.' AND id_obszaru = '.$id_miejsca.'';
        if($id_miejsca!=NULL && $function=="dostawca")
        $query=$query.' AND id_filii = '.$id_miejsca.'';
        if($id_pojazdu!=NULL)
        $query=$query.' AND id_pojazdu = '.$id_pojazdu;
                
        $data = array();
        $select=$this->pdo->query($query);

            
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
        
        return $data;  
           
    }
    
    public function selectOrders($post){
        
        $id_zlecenia=NULL;
        if(isset($post['id_zlecenia']))
           $id_zlecenia=$post['id_zlecenia'];
        
        $opis=NULL;
        if(isset($post['opis']))
           $opis=$post['opis'];
        
        $rodzaj_platnosci=NULL;
        if(isset($post['rodzaj_platnosci']))
           $rodzaj_platnosci=$post['rodzaj_platnosci'];
        
        $status=NULL;
        if(isset($post['status']))
           $status=$post['status'];
        
        $pesel_nadawcy=NULL;
        if(isset($post['pesel_nadawcy']))
           $pesel_nadawcy=$post['pesel_nadawcy'];
        $query='SELECT z.*, CONCAT(k.imie," ",k.nazwisko) as nadawca FROM zlecenie z 
        INNER JOIN klient k ON k.pesel_klienta = z.pesel_nadawcy  WHERE 1';
        if($id_zlecenia!=NULL)
        $query=$query.' AND id_zlecenia = '.$id_zlecenia;
        if($opis!=NULL)
        $query=$query.' AND opis = "'.$opis.'"';
        if($rodzaj_platnosci!=NULL)
        $query=$query.' AND rodzaj_platnosci = "'.$rodzaj_platnosci.'"';
        if($status!=NULL)
        $query=$query.' AND status = "'.$status.'"';
        if($pesel_nadawcy!=NULL)
        $query=$query.' AND pesel_nadawcy = '.$pesel_nadawcy;
                
        $data = array();
        $select=$this->pdo->query($query);

            
        foreach ($select as $row) {
            $data[]= new Order($row,$this->selectDeliveries($row['id_zlecenia']));
        }
        $select->closeCursor();
        
        return $data;  
           
    }
    
    public function selectDeliveries($id){

        $query='SELECT * FROM przesylka WHERE id_zlecenia = "'.$id.'"';
                
        $data = array();
        $select=$this->pdo->query($query);

        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
        
        return $data;  
    }
                               
                               
    public function selectComplains($post){
        
        $id_reklamacji=NULL;
        if(isset($post['id_reklamacji']))
           $id_reklamacji=$post['id_reklamacji'];
        
        $opis=NULL;
        if(isset($post['opis']))
           $opis=$post['opis'];
        
        $status=NULL;
        if(isset($post['status']))
           $status=$post['status'];
        
        $status=NULL;
        if(isset($post['status']))
           $status=$post['status'];
        
        $id_przesylki=NULL;
        if(isset($post['id_przesylki']))
           $id_przesylki=$post['id_przesylki'];
 
        $query='SELECT * FROM reklamacja WHERE 1';
        if($id_reklamacji!=NULL)
        $query=$query.' AND id_reklamacji = '.$id_reklamacji;
        if($opis!=NULL)
        $query=$query.' AND opis = "'.$opis.'"';
        if($status!=NULL)
        $query=$query.' AND status = "'.$status.'"';
        if($id_przesylki!=NULL)
        $query=$query.' AND id_przesylki = '.$id_przesylki;
                
        $data = array();
        $select=$this->pdo->query($query);

            
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
        
        return $data;  

    }
    
    public function addCustomer($post){

        $output = '<div class="error">Nie podano: ';
        foreach($post as $key => $val){
            if($val == null)
                $output = $output.' '.$key;
        }

        if($output == '<div class="error">Nie podano: ' ){
            try{
                
                $q = $this->pdo->prepare('INSERT INTO klient (pesel_klienta, imie, nazwisko, adres, numer_kontaktowy, adres_email, id_rejonu) VALUES (
                    :pesel_klienta,
                    :imie,
                    :nazwisko,
                    :adres,
                    :numer_kontaktowy,
                    :adres_email,
                    :id_rejonu)');
        
                $q->bindValue(':pesel_klienta', $_POST['pesel_klienta'], PDO::PARAM_INT);
                $q->bindValue(':imie', $_POST['imie'], PDO::PARAM_STR);
                $q->bindValue(':nazwisko', $_POST['nazwisko'], PDO::PARAM_STR);
                $q->bindValue(':adres', $_POST['adres'], PDO::PARAM_STR);
                $q->bindValue(':numer_kontaktowy', $_POST['numer_kontaktowy'], PDO::PARAM_INT);
                $q->bindValue(':adres_email', $_POST['adres_email'], PDO::PARAM_STR);
                $q->bindValue(':id_rejonu', $_POST['id_rejonu'], PDO::PARAM_INT);
                
                $q->execute();
                }
            catch(PDOException $e){
		      return $output.'.</br> '.'Błąd spójności danych <div>';
            }
            return '<div class="info">Utworzono rekord!</div>';
            
        }
        return $output;

    }
                        
}
       

?>