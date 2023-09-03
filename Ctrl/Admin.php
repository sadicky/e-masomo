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
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			include('Vues/Admin/home.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	function Promo(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			include('Vues/Admin/promo.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	function Dep(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			require_once('Models/Admin/dep.class.php');
			$dep = new Dep();	
			$getDeps = $dep->getDeps();
			include('Vues/Admin/dep.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	
	function Classe(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/classe.class.php');
			require_once('Models/Admin/dep.class.php');
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			$dep = new Dep();
			$classe = new Classe();		
			$getDeps = $dep->getDeps();
			$getClasses = $classe->getClasses();
			include('Vues/Admin/classe.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	
	function Profs(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/classe.class.php');
			require_once('Models/Admin/prof.class.php');
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			$classe = new Classe();	
			$prof = new Prof();	
			$getProfs = $prof->getProfs();
			include('Vues/Admin/profs.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	
	
	function Etudiants(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/classe.class.php');
			require_once('Models/Admin/etudiant.class.php');
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			$classe = new Classe();	
			$etudiants = new Etudiant();	
			$getEtudiants = $etudiants->getEtudiants();
			include('Vues/Admin/etudiants.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	
	function Users(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/user.class.php');
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			$users = new User();	
			$getUsers = $users->getUsers();
			$getRoles = $users->getRoles();
			include('Vues/Admin/users.php');
		}else{			
				include('Vues/Admin/error500.php');
			}
	}

	
	
	function profDet(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/classe.class.php');
			require_once('Models/Admin/prof.class.php');
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			$classe = new Classe();	
			$prof = new Prof();	
			$id=$_GET['id'];
			$getPi = $prof->getProfId($id);
			$getPc = $prof->getProfCoursId2($id);
			include('Vues/Admin/profdet.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	function coursDet(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/classe.class.php');
			require_once('Models/Admin/prof.class.php');
			require_once('Models/Admin/cours.class.php');
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			$classe = new Classe();	
			$prof = new Prof();	
			$cours = new Cours();	
			$id=$_GET['id'];
			$getC = $cours->getCoursClasse2($id);
			include('Vues/Admin/coursdet.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}


	
	function Cours(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/classe.class.php');
			require_once('Models/Admin/cours.class.php');
			require_once('Models/Admin/dep.class.php');
			require_once('Models/Admin/promo.class.php');
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			$classe = new Classe();	
			$cours = new Cours();
			$dep = new Dep();
		   $getCours = $cours->getsCours();	
		   $getClasses = $classe->getClasses();	
		   $getDeps = $dep->getDeps();	
			// $id=$_GET['id'];
			// $getPi = $prof->getProfId($id);
			include('Vues/Admin/cours.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}




