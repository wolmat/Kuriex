<?php

require_once('controller.php');

class LoginController extends Controller {
	public function login(){
		$view = new ViewModel('admin/login');
        if(isset($_SESSION['user']) && $_SESSION['user'] != 'admin'){
            $view->assign('user', $_SESSION['user']);
                                header('Location: yourAccount');
            return;
        }

        if(isset($_POST['user']) && $_POST['user'] == 'admin'){
            $admin = new AdminController();
            $admin->login();
        }
        
        if(isset($_POST['user'])){
            $customer = new CustomerModel();
            $logged = $customer->selectWithPassword($_POST['user'], $_POST['pass']);

            if(!$logged){
                $view->assign('message-type', 'error');
                $view->assign('message', 'Błędne dane');
                $view->display();
                return;
            }

            $_SESSION['user'] = $_POST['user'];
            $view->assign('user', $_SESSION['user']);
            $view->setTemplate('customer/index');
            
            header('Location: yourAccount');
        }
        $view->display();
	}
    
    public function logout(){
        session_destroy();
        header('Location: main');
    }
}