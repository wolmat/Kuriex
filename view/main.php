<?php

include 'view/view.php';
 
class MainView extends View{
	
    public function  index() {
        $this->render('/main/index');
    }
	
    public function  login() {
        $this->render('/main/login');
    }

}

?>