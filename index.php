<?php
$file = 'controller/main.php';
$controller_class = 'MainController';
$action = 'index';

// when controller or its action not found
// redirect to main controller, index action
if(file_exists('controller/'.$_GET['task'].'.php')){
    require_once('controller/'.$_GET['task'].'.php');
   
    if(class_exists(ucfirst($_GET['task']).'Controller')
        && method_exists(ucfirst($_GET['task']).'Controller', $_GET['action'])){
        
        $file = 'controller/'.$_GET['task'].'.php';
        $controller_class = ucfirst($_GET['task']).'Controller';
        $action = $_GET['action'];
    }
}

require_once($file);
$controller = new $controller_class();
$controller->$action();

?>