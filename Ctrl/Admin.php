<?php

	function login(){
		require_once('Models/Admin/auth.php');
		include('Vues/Admin/login.php');
	}
	
	function forgot(){
		require_once('Models/Admin/forgot.php');
		include('Vues/forgot-password.php');
	}
	
	 //Fonction Login
	 function error404(){
	    include('Vues/Admin/error404.php');
	}

	function Logout(){
		session_start();  
		session_destroy(); 
		header("location:".WEBROOT."login");  
    }
    
    //Fonction de la page non trouvée
	function Dashboard(){
		if(@$_SESSION['logged']){
			include('Vues/Admin/home.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	function Brands(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/brand.class.php');
			$brand = new Brand();	
			$getBrands = $brand->getBrands();	
			include('Vues/Admin/brands.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}

	function Devices(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/brand.class.php');
			require_once('Models/Admin/device.class.php');
			$brand = new Brand();		
			$device = new Device();	
			$getBrands = $brand->getBrands();
			$getDevices = $device->getDevices();
			include('Vues/Admin/devices.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}
	
	function Status(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/status.class.php');
			$status = new Status();	
			$getStatus = $status->getStatus();	
			include('Vues/Admin/status.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}

	function Technicians(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/tech.class.php');
			$tech = new Technician();	
			$getTechnicians = $tech->getTechnicians();	
			include('Vues/Admin/technicians.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}
	
	function Marketters(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/market.class.php');
			$market = new Marketter();	
			$getMarketters = $market->getMarketters();	
			include('Vues/Admin/marketters.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}
	
	function Orders(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/order.class.php');
			require_once('Models/Admin/brand.class.php');
			require_once('Models/Admin/device.class.php');
			require_once('Models/Admin/defect.class.php');
			$defects = new Defect();		
			$device = new Device();	
			$brand = new Brand();	
			$orders = new Repair();	
			$getDefects = $defects->getDefects();
			$getDevices = $device->getDevices();
			$getBrands = $brand->getBrands();
			$getOrders = $orders->getOrders();	
			include('Vues/Admin/orders.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}
	function Users(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/user.class.php');
			$users = new User();	
			$getUsers = $users->getUsers();
			$getRoles = $users->getRoles();
			include('Vues/Admin/users.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}

	function Defect(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/defect.class.php');
			require_once('Models/Admin/device.class.php');
			$defects = new Defect();		
			$device = new Device();	
			$getDefects = $defects->getDefects();
			$getDevices = $device->getDevices();
			include('Vues/Admin/defects.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}

	function NewOrder(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/order.class.php');
			require_once('Models/Admin/brand.class.php');
			require_once('Models/Admin/device.class.php');
			require_once('Models/Admin/defect.class.php');
			require_once('Models/Admin/tech.class.php');
			$tech = new Technician();	
			$defects = new Defect();		
			$device = new Device();	
			$brand = new Brand();	
			$orders = new Repair();	
			$getDefects = $defects->getDefects();
			$getDevices = $device->getDevices();
			$getBrands = $brand->getBrands();
			$getOrders = $orders->getOrders();
			$getTechnicians = $tech->getTechnicians();
			include('Vues/Admin/neworder.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}




