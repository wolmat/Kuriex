<?php

include 'view/view.php';
 
class AdminView extends View{
	
    public function  index() {
        $this->render('/admin/index');
    }
	
    public function  login() {
        $this->render('/admin/login');
    }

}

?>