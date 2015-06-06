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
        $mod=$this->loadModel('admin');
        
        if( $_SERVER['REQUEST_METHOD'] == 'POST'  ){
            echo $_POST['id_zlecenia']." ".$_POST['pesel_nadawcy'];
            $this->set('order',$mod->selectOrders($_POST));
            $this->render('/main/findResult');       
        }
        else
            $this->render('/main/find');
    }
}

?>