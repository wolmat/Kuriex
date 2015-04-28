<?php

include 'view/view.php';
 
class UserView extends View{
	
    public function  login() {
        $this->render('/user/login');
    }
	
    public function  register() {
        $this->render('/user/register');
    }

}

?>