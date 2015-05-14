<?php
/**
 * Kontroler strony g³ównej
 */
 
include 'controller/controller.php';
 
class MainController extends Controller{
	//Wyœwietlanie strony g³ównej
    public function index() {
		$model=$this->loadModel('main');

        $view=$this->loadView('main');
        $view->index();
    }
	
	//Informacje kontaktowe
	public function about(){
		$view=$this->loadView('main');
        $view->about();
	}

	//Znajdywanie paczki
	public function find(){
		$view=$this->loadView('main');
        $view->find();
	}
	
}