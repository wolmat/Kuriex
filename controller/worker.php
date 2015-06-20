
<?php
class WorkerController {
    public function show(){
        $workerModel = new WorkerModel();
        $view = new ViewModel('admin/workers');
        if(isset($_POST['function']) && $_POST['function'] == 'dostawca')
            $view->assign('workers',$workerModel->selectSuppliers());
        else
            $view->assign('workers',$workerModel->selectCouriers());
        $view->display();
    }

    public function add(){
        $view = new ViewModel('admin/workers');
        
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
        
        $workerModel = new WorkerModel();
        try {
            $type = array_shift($_POST);
            $view->assign('workers', $workerModel->insertWorker(array_values($_POST), $type));
        } catch(PDOException $e){
            $view->assign('workers', array());
            $view->assign('message-type', 'error');
            $view->assign('message','Błąd spójności danych!');
            $view->display();
            return;
        }

        $view->assign('message-type', 'info');
        $view->assign('message','Dodano nowego pracownika!');
        $view->display();
    }

    public function delete(){
        $view = new ViewModel('admin/workers');
        $workerModel = new WorkerModel();
        try {
            $view->assign('workers', $workerModel->deleteWorker($_POST['delete'], $_POST['function']));
        } catch(PDOException $e) {
            $view->assign('workers', array());
            $view->assign('message-type', 'error');
            $view->assign('message',
                'Nie można usunąć pracownika. 
                 Sprawdź czy nie jest powiązany z przesyłką lub zleceniem!');
            $view->display();
            return;
        }
        
        $view->assign('message-type', 'info');
        $view->assign('message','Usunięto pracownika!');
        $view->display();
    }

    public function update(){
        $view = new ViewModel('admin/workers');
    }
}