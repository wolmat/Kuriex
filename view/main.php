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
        if(isset($_POST['id'])){
            $this->set('id',$_POST['id']);
            $this->render('/main/findResult');    
        }
        else
            $this->render('/main/find');
    }
}

?>