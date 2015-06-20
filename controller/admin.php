<?php
include_once 'controller/controller.php';
 
class AdminController extends Controller{
    public function index() {
        $adminModel = new AdminModel();
        $view = new ViewModel('admin/index');
        $view->assign('orders', $adminModel->selectOrders($_POST));
        $view->assign('complains', $adminModel->selectComplains($_POST));

        $view->display();
    }
	
	public function login(){
        $view = new ViewModel('/admin/login');
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

    //Wyszukiwanie kierowców
	public function workers(){
		$view=$this->loadView('admin');
        $view->workers();
	}
    
    //Wyszukiwanie pracowników
	public function customers(){
		$view=$this->loadView('admin');
        $view->customers();
	}

    //Wyszukiwanie zleceń
	public function orders(){
		$view=$this->loadView('admin');
        $view->orders();
	}
}