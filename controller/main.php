<?php
/**
 * Kontroler strony g��wnej
 */
 
include 'controller/controller.php';
 
class MainController extends Controller{
	//Wy�wietlanie strony g��wnej
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