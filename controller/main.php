<?php
/**
 * Kontroler strony glownej
 */
 
include_once 'controller/controller.php';
 
class MainController extends Controller{
	//Wyswietlanie strony glownej
    public function index() {
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