<?php

include 'view/view.php';
 
class AdminView extends View{
	
    public function  index() {
        $this->render('/admin/index');
    }
	
    public function  login() {
        $this->render('/admin/login');
    }

    public function  workers() {
        $this->render('/admin/workers');
    }
    
    public function  customers() {
        $mod=$this->loadModel('admin');
        $this->set('customers',$mod->selectCustomers($_POST));

        $this->render('/admin/customers');
    
    }

     public function  orders() {
        $this->render('/admin/orders');
    }
    
}

?>