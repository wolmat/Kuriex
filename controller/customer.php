<?php

class CustomerController {
    public function show(){
        $view = new ViewModel('admin/customers');
        $customerModel = new CustomerModel();
        $view->assign('customers', $customerModel->selectAll());
        $view->display();
    }

    public function customerInformations(){
        $view = new ViewModel('customer/index');
        $customerModel = new CustomerModel();
        $view->assign('customer', $customerModel->selectByEmail($_SESSION['user']));
        $view->display();
    }
    
    public function add(){
        $view = new ViewModel('admin/customers');
        
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
        
        $customerModel = new CustomerModel();
        try {
            $view->assign('customers', $customerModel->insertCustomer(array_values($_POST)));
        } catch(PDOException $e){
            $view->assign('customers', array());
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
        $view = new ViewModel('admin/customers');
        $customerModel = new CustomerModel();
        try {
            $view->assign('customers', $customerModel->deleteCustomer($_POST['delete']));
        } catch(PDOException $e) {
            $view->assign('message-type', 'error');
            $view->assign('message',
                'Nie można usunąć klienta. Sprawdź czy nie jest powiązany z przesyłką lub zleceniem!');
            $view->display();
            return;
        }
        
        $view->assign('message-type', 'info');
        $view->assign('message','Usunięto klienta!');
        $view->display();
    }

    public function update(){
        $view = new ViewModel('admin/customers');
    }
}