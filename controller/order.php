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

    public function showCustomerOrders(){
        $view = new ViewModel('customer/orders');
        $orderModel = new OrderModel();
        $orders = $orderModel->selectByEmail($_SESSION['user']);
        for($i = 0; $i < count($orders); ++$i){
            $orders[$i]['deliveries'] = 
                $orderModel->selectDeliveries($orders[$i]['id_zlecenia']);
        }
        $view->assign('orders', $orders);
        $view->display();
    }
    
    public function newOrder(){
        $view = new ViewModel('customer/newOrder');
        
        $post = array_filter($_POST);
        if(empty($post)){
            $view->display();
            return;
        }
        
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
        $customerModel = new CustomerModel();
        $logged = $customerModel->selectByEmail($_SESSION['user']);
        
        $prepare[0] = $logged['pesel_klienta'];
        $prepare[1] = NULL;
        
        $order = array_merge($prepare, array_values($_POST));

        try {
            $orderModel->newOrder($order);
        } catch(PDOException $e){
            $view->assign('message-type', 'error');
            $view->assign('message', 'Błąd spójności danych!');
            $view->display();
            return;
        }
        $view->assign('message-type', 'info');
        $view->assign('message', 'Dodano zlecenie!');
        $view->display();
    }
    
    public function add(){
        $view = new ViewModel('customer/orders');
        
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
            $view->assign('message','Błąd spójności danych!');
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
    
    public function acceptOrder(){
        $view = new ViewModel('admin/index');
        $orderModel = new OrderModel();
        try {
            $orderModel->acceptOrder($_POST['id_zlecenia']);
        } catch(PDOException $e) {
            $view->assign('message-type', 'error');
            $view->assign('message',
                'Nie można zaakceptować!');
            $view->display();
            return;
        }
        
        $view->assign('message-type', 'info');
        $view->assign('message','Zaakceptowano!');
        $view->display();
    }
    
    public function acceptComplain(){
        $view = new ViewModel('admin/index');
        $orderModel = new OrderModel();
        try {
            $orderModel->acceptComplain($_POST['id_reklamacji']);
        } catch(PDOException $e) {
            $view->assign('message-type', 'error');
            $view->assign('message',
                'Nie można zaakceptować!');
            $view->display();
            return;
        }
        
        $view->assign('message-type', 'info');
        $view->assign('message','Zaakceptowano!');
        $view->display();
    }
    
}