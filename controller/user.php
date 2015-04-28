<?php
/**
 * Kontroler logowania
 */
 
include 'controller/controller.php';
 
class UserController extends Controller{
	//Logowanie sie pracownika
    public function login() {
        $view=$this->loadView('user');
        $view->login();
    }
	
	//Utworzenie nowego konta
	public function register(){
		$view=$this->loadView('user');
        $view->register();
	}

}