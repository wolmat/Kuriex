<?php
/**
 * Kontroler strony g��wnej
 */
 
include 'controller/controller.php';
 
class MainController extends Controller{
	//Wy�wietlanie strony g��wnej
    public function index() {
        $view=$this->loadView('main');
        $view->index();
    }
	
	//Logowanie do strony
	public function login(){
		$view=$this->loadView('main');
        $view->login();
	}

}