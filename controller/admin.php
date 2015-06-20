<?php
include_once 'controller/controller.php';
 
class AdminController extends Controller{
	//Strona z notyfikacjami
    public function index() {
        $adminModel = new AdminModel();
        $view = new ViewModel('admin/index');
        $view->assign('orders', $adminModel->selectOrders($_POST));
        $view->assign('complains', $adminModel->selectComplains($_POST));

        $view->display();
    }
	
	//Logowanie się
	public function login(){
		$view=$this->loadView('admin');
        $view->login();
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