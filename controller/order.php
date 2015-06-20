<?php

class OrderController {
    public function show(){
        $view = new ViewModel('admin/orders');
        $orderModel = new OrderModel();
        $orders = $orderModel->selectAll();
        for($i = 0; $i < count($orders); ++$i){
            $orders[$i]['deliveries'] = 
                $orderModel->selectDeliveries($orders[$i]['id_zlecenia']);
        }
        $view->assign('orders', $orders);
        
        $view->display();
    }

    public function add(){
        $view = new ViewModel('admin/orders');
        
        $empty_fields = array();
        foreach($_POST as $key => $value){
            if(empty($value)) $empty_fields[] = $key;
        }
        
        if(!empty($empty_fields)){
            $view->assign('message-type', 'error');
            $view->assign('message', 'Prosze wypełnić brakujące pola: ');
            $view->assign('fields', $empty_fields);
            $view->display();
            return;
        }
        
        $orderModel = new OrderModel();
        try {
            $view->assign('orders', $orderModel->insertOrder(array_values($_POST)));
        } catch(PDOException $e){
            $view->assign('orders', array());
            $view->assign('message-type', 'error');
            $view->assign('message','Błąd spójności danych!'. $e->getMessage());
            $view->display();
            return;
        }

        $view->assign('message-type', 'info');
        $view->assign('message','Dodano nowego klienta!');
        $view->display();
    }

    public function delete(){
        $view = new ViewModel('admin/orders');
        $orderModel = new OrderModel();
        try {
            $view->assign('orders', $orderModel->deleteOrder($_POST['delete']));
        } catch(PDOException $e) {
            $view->assign('message-type', 'error');
            $view->assign('message',
                'Nie można usunąć zlecenia!');
            $view->display();
            return;
        }
        
        $view->assign('message-type', 'info');
        $view->assign('message','Usunięto zlecenie!');
        $view->display();
    }
}