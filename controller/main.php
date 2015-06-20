<?php
/**
 * Kontroler strony glownej
 */
 
include_once 'controller/controller.php';
 
class MainController extends Controller{
    public function index() {
        $view = new ViewModel('main/index');
        $stats = new StatisticsModel();
        foreach($stats->getStatistics() as $stat => $value){
            $view->assign($stat, $value);
        }
        $view->display();
    }
	
	//Informacje kontaktowe
	public function about(){
		$view = new ViewModel('main/about');
        $view->display();
	}

	//Znajdywanie paczki
	public function find(){
		$view = new ViewModel('main/find');
        $view->display();
	}
	
}