<?php
session_start();
define('WEBROOT',str_replace('index.php', "", $_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php', "", $_SERVER['SCRIPT_FILENAME']));

include 'Ctrl/Admin.php';
include 'Ctrl/Public.php';
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
	else if($_GET['p']=='promo')
	{
		Promo();
	}
	else if($_GET['p']=='Home')
	{
		Home();
	}
	else if($_GET['p']=='dep')
	{
		Dep();
	}
	else if($_GET['p']=='classes')
	{
		Classe();
	}
	else if($_GET['p']=='profs')
	{
		Profs();
	}
	else if($_GET['p']=='profdet')
	{
		profDet();
	}
	else if($_GET['p']=='etudiants')
	{
		Etudiants();
	}
	else if($_GET['p']=='MyDashboard')
	{
		MyDashboard();
	}
	else if($_GET['p']=='coursdet')
	{
		coursDet();
	}
	else if($_GET['p']=='cours')
	{
		Cours();
	}
	else if($_GET['p']=='users')
	{
		Users();
	}
	else if($_GET['p']=='about')
	{
		About();
	}
	else if($_GET['p']=='plogin')
	{
		PLogin();
	}
	else if($_GET['p']=='register')
	{
		Register();
	}
	else if($_GET['p']=='verification')
	{
		Verify();
	}
	else if($_GET['p']=='logout')
	{
		Logout();
	}
	else if($_GET['p']=='plogout')
	{
		PLogout();
	}
	//pour la page non trouvee
	else{
		error404();
	}	
}
else{
	Home();
}
?>