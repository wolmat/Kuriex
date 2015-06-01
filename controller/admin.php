<?php
/**
 * Kontroler panel admina
 */
 
include_once 'controller/controller.php';
 
class AdminController extends Controller{
	//Strona z notyfikacjami
    public function index() {
        $view=$this->loadView('admin');
        $view->index();
    }
	
	//Logowanie się
	public function login(){
		$view=$this->loadView('admin');
        $view->login();
	}

	
}