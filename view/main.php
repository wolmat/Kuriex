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
            $this->set('delivery',$mod->selectDeliveries($_POST['id_zlecenia']));
            $this->render('/main/findResult');       
        }
        else
            $this->render('/main/find');
    }
    

    
}

?>