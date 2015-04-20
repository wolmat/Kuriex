<?php
/**
 * Kontroler strony g³ównej
 */
 
include 'controller/controller.php';
 
class MainController extends Controller{
	//Wyœwietlanie strony g³ównej
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