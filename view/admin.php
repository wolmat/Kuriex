<?php

include 'view/view.php';
 
class AdminView extends View{
	
    public function  index() {
        $mod=$this->loadModel('admin');
        $post['status'] = "oczekuje";
        $this->set('orders',$mod->selectOrders($post));
        $this->render('/admin/index');
    }
	
    public function  login() {
        $this->render('/admin/login');
    }

    public function  workers() {
        $mod=$this->loadModel('admin');
        $this->set('workers',$mod->selectWorkers($_POST));
        
        if(!isset($_POST['function']))
            $_POST['function'] = "kurier";    
        
        $this->set('function',$_POST['function']);
        $this->render('/admin/workers');
    }
    
    public function  customers() {
        $mod=$this->loadModel('admin');
        $this->set('customers',$mod->selectCustomers($_POST));
        $this->render('/admin/customers');
    
    }

     public function  orders() {
        $mod=$this->loadModel('admin');
        $this->set('orders',$mod->selectOrders($_POST));
        $this->render('/admin/orders');
    }
    
}

?>