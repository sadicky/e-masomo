<?php

    //Fonction Login
	function login(){
	    include('Vues/login.php');
	}
	function logout(){
		session_start();  
		session_destroy();  
		header("location:".WEBROOT."login");  
    }
    
    //Fonction de la page non trouvée
	function error404(){
	    include('Vues/Login/error404.php');
    }

    //Fonction de la page non trouvée
	function home(){
		// include 'Language/config.php';
		// require_once('Models/Post.php');
		// $Post = new Post();
		// $post = $Post->getPost3();
	    include('Vues/index.php');
	}

  //Fonction de la page non trouvée
  function contact(){
	include('Vues/contacts.php');
}

  //Fonction de la page non trouvée
  function blog(){
	require_once('Models/Post.php');
	$Post = new Post();
	$post = $Post->getAll();
	include('Vues/blog.php');
}
  //Fonction de la page non trouvée
  function single(){
	include('Vues/single.php');
}
 //Fonction de la page non trouvée
 function Category(){
	include('Vues/category.php');
}
function FirmDown(){
	include('Vues/FirmDown.php');
}
  //Fonction de la page non trouvée
  function firmware(){
	include('Vues/firmware.php');
}

 //Fonction de la page non trouvée
 function reparation(){
	include('Vues/reparation.php');
}

 //Fonction de la page non trouvée
 function prix(){
	include('Vues/prix.php');
}

 //Fonction de la page non trouvée
 function vente(){
	include('vente/accueil.php');
}