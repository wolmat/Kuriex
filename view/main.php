<?php

include 'view/view.php';
 
class MainView extends View{
	
    public function  index() {
        $mod=$this->loadModel('main');
        
        $this->set('statisticsIndex',$mod->statisticsIndex());
        
        
        $this->render('/main/index');
    }
	
    public function  about() {
        $this->render('/main/about');
    }

    public function  find() {
        $mod=$this->loadModel('main');
        
        if( $_SERVER['REQUEST_METHOD'] == 'POST'  ){
            $this->set('delivery',$mod->selectDeliveries($_POST['id_przesylki']));
            $this->render('/main/findResult');       
        }
        else
            $this->render('/main/find');
    }
    


    public function address($address){
            $prepAddr = str_replace(' ','+',$address);

            $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');

            $output= json_decode($geocode);

             $lat = $output->results[0]->geometry->location->lat;
             $long = $output->results[0]->geometry->location->lng;

             return $lat.', '.$long;

    }

    
    
}

?>