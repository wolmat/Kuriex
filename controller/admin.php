<?php

require_once 'controller/controller.php';
 
class AdminController extends Controller {
    public function index() {
        $orderModel = new OrderModel();
        $view = new ViewModel('admin/index');
        $view->assign('orders', $orderModel->selectPendingOrders($_POST));
        $view->assign('complains', $orderModel->selectComplains($_POST));

        $view->display();
    }
	
	public function login(){
        $view = new ViewModel('admin/login');
        if(isset($_SESSION['user']) && $_SESSION['user'] == "admin")
            header("Location: admin");

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['user'] == "admin" && $_POST['pass'] == "pass"){
                $_SESSION['user'] = "admin";
                header("Location: admin");
            } else $view->display();
        } else $view->display();
	}
    
    public function logout(){
        session_destroy();
        header("Location: main");
    }
}