<?php

include 'view/view.php';
 
class AdminView extends View{
	
    public function  index() {
        $mod=$this->loadModel('admin');
        $post['status'] = "oczekuje";
        $this->set('orders',$mod->selectOrders($post));
        $this->set('complains',$mod->selectComplains($post));
        $this->render('/admin/index');
    }
	
    public function  login() {
        if(isset($_SESSION['user']))
            header("Location: admin");
        if( $_SERVER['REQUEST_METHOD'] == 'POST'  ){
            
            if($_POST['user'] == "admin" && $_POST['pass'] == "pass"){
                $_SESSION['user'] = "admin";
                header("Location: admin");
            }
            else
                $this->render('/admin/login');                
        }
        else
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

        if(isset($_POST['add']))
            $this->set('message',$mod->addCustomer($_POST));
        else
            $this->set('message','');
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