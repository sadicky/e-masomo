<?php
session_start();
define('WEBROOT',str_replace('index.php', "", $_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php', "", $_SERVER['SCRIPT_FILENAME']));

include 'Ctrl/Admin.php';
// var_dump($lang);die();
if(isset($_GET['p'])){
	$params = explode('/', $_GET['p']); 
	//die(print_r($params));
	$_SESSION['action'] = '';
	$action = $params[0];
	$d = preg_split("#[-]+#", $action);
	// var_dump($d);die();
	$n = count($d);   
	if ($n > 1) 
	{
		$action = $d[0];
	}

	if($_GET['p']=='login')
	{
		Login();
	}
	
	//url pour le dashboard
	else if($_GET['p']=='Dashboard')
	{
		Dashboard();
	}
	else if($_GET['p']=='brands')
	{
		Brands();
	}
	else if($_GET['p']=='devices')
	{
		Devices();
	}
	else if($_GET['p']=='defects')
	{
		Defect();
	}
	else if($_GET['p']=='users')
	{
		Users();
	}
	else if($_GET['p']=='status')
	{
		Status();
	}
	else if($_GET['p']=='technicians')
	{
		Technicians();
	}
	else if($_GET['p']=='marketters')
	{
		Marketters();
	}
	else if($_GET['p']=='orders')
	{
		Orders();
	}
	else if($_GET['p']=='logout')
	{
		Logout();
	}
	else if($_GET['p']=='neworder')
	{
		NewOrder();
	}
	//pour la page non trouvee
	else{
		error404();
	}	
}
else{
	login();
}
?>