<?php

function Home(){
	require_once('Models/Admin/classe.class.php');
	require_once('Models/Admin/prof.class.php');
	require_once('Models/Admin/cours.class.php');
	require_once('Models/Admin/etudiant.class.php');
	$cours = new Cours();	
	$classe = new Classe();	
	$prof = new Prof();	
	$etudiants = new Etudiant();	
	$countCours= $cours->countC();	
	$countEtudiants= $etudiants->countE();
	$countClasses= $classe->countC();
	$countProfs = $prof->countP();
	include('Vues/Public/index.php');
}

function About(){
	// require_once('Models/Admin/price.class.php');
	// $price = new Price();	
	// $getPrices = $price->getPrices();	
	include('Vues/Public/about.php');
}

function PLogin(){
	require_once('Models/Admin/authetud.php');
	include('Vues/Public/login.php');
}

function Register(){
	require_once('Models/Admin/promo.class.php');
	require_once('Models/Admin/dep.class.php');
	$dep = new Dep();	
	$promo = new Promo();	
	$getDeps = $dep->getDeps();
	$getPromos = $promo->getPromoss();
	include('Vues/Public/register.php');
}


function Verify(){
	require_once('Models/Admin/promo.class.php');
	require_once('Models/Admin/dep.class.php');
	$dep = new Dep();	
	$promo = new Promo();	
	$getDeps = $dep->getDeps();
	$getPromos = $promo->getPromoss();
	include('Vues/Public/verify.php');
}

function MyDashboard(){
	if(@$_SESSION['logged']){
		require_once('Models/Admin/classe.class.php');
		require_once('Models/Admin/prof.class.php');
		require_once('Models/Admin/cours.class.php');
		require_once('Models/Admin/etudiant.class.php');
		$cours = new Cours();	
		$classe = new Classe();	
		$prof = new Prof();	
		$etudiants = new Etudiant();	

		//count
		$countCours= $cours->countC();
		$countEtudiants= $etudiants->countE();
		$countClasses= $classe->countC();
		$countProfs = $prof->countP();

		//etudiant
		$etudiant = $etudiants->getEtudiantId($_SESSION['mat']);
		
		//cours-class
		$idclasse=$etudiant->classe_id;
		$idas=$etudiant->promo_id;
		$getCc = $cours->getCoursClasse($idclasse);
		
		//camarades
		$getCam = $etudiants->getCamarade($idclasse,$idas,$_SESSION['mat']);
		// var_dump($idas);die();

		include('Vues/Public/dashetudiant.php');
	}else{			
		include('Vues/Admin/error500.php');
	}
}


function PLogout(){
	session_start();  
	session_destroy(); 
	header("location:".WEBROOT."plogin");  
}

