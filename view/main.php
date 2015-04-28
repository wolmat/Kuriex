<?php

include 'view/view.php';
 
class MainView extends View{
	
    public function  index() {
        $this->render('/main/index');
    }
	
    public function  about() {
        $this->render('/main/about');
    }

    public function  find() {
        $this->render('/main/find');
    }
}

?>