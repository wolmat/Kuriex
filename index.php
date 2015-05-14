<?php


switch($_GET['task']){
	
	case "main":
		include 'controller/main.php';
		$ob = new MainController();
		$ob->$_GET['action']();
	break;
	
	case "user":
		include 'controller/user.php';
		$ob = new UserController();
		$ob->$_GET['action']();
	break;
	
}

?>