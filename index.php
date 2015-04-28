<?php


switch($_GET['task']){
	
	case "main":
		include 'controller/main.php';
		$ob = new MainController();
		if($_GET['action']=='index')
			$ob->index();
		if($_GET['action']=='about')
			$ob->about();
		if($_GET['action']=='find')
			$ob->find();
	break;
	
	case "user":
		include 'controller/user.php';
		$ob = new UserController();
		if($_GET['action']=='login')
			$ob->login();
		if($_GET['action']=='register')
			$ob->register();
	break;
}

?>