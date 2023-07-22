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
	function Devices(){
		require_once('Models/Admin/brand.class.php');
		require_once('Models/Admin/device.class.php');
		$brand = new Brand();		
		$device = new Device();	
		$getBrands = $brand->getBrands();
		$getDevices = $device->getDevices();
	    include('Vues/Admin/devices.php');
	}
	function Defect(){
		require_once('Models/Admin/defect.class.php');
		require_once('Models/Admin/device.class.php');
		$defects = new Defect();		
		$device = new Device();	
		$getDefects = $defects->getDefects();
		$getDevices = $device->getDevices();
	    include('Vues/Admin/defects.php');
	}




