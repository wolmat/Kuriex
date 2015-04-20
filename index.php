<?php


switch($_GET['task']){
	
	case "main":
		include 'controller/main.php';
		$ob = new MainController();
		$ob->index();
	break;
	
	case "login":
		include 'controller/main.php';
		$ob = new MainController();
		$ob->login();
	break;
}

?>