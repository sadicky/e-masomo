<?php

    //Fonction Login
	function login(){
	    include('Vues/Admin/login.php');
	}

	 //Fonction Login
	 function error404(){
	    include('Vues/Admin/error404.php');
	}

	function logout(){
		session_start();  
		session_destroy();  
		header("location:".WEBROOT."login");  
    }
    
    //Fonction de la page non trouvée
	function Dashboard(){
	    include('Vues/Admin/home.php');
	}
	function Brands(){
		require_once('Models/Admin/brand.class.php');
		$brand = new Brand();	
		$getBrands = $brand->getBrands();	
	    include('Vues/Admin/brands.php');
	}


