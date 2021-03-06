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
        $orderModel = new OrderModel();
        if(isset($_POST['id_przesylki'])){
            $result = $orderModel->findDelivery($_POST['id_przesylki']);
            if(!empty($result)){
                $view->assign('delivery', $result);
                $view->assign('from', $orderModel->getAddress($result['od']));
                $view->assign('to', $orderModel->getAddress($result['do']));
            }
            $view->setTemplate('main/findResult');
        }
        $view->display();
	}
}