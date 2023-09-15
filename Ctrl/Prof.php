<?php

	function LoginP(){
		require_once('Models/Admin/authprof.php');
		include('Vues/Prof/login.php');
	}
	
    
    // //Fonction de la page non trouvée
	function DashboardProf(){
		if(@$_SESSION['logged']){
			require_once('Models/Admin/promo.class.php');
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
	
			$getPi = $prof->getProfId($_SESSION['mat']);
			$getPc = $prof->getProfCoursId2($_SESSION['mat']);
			$promo = new Promo();	
			$getPromos = $promo->getPromos();
			include('Vues/Prof/home.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	//Prof Etudiants
	function MyClassProf(){
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
	
			$getPc = $prof->getProfCoursId2($_SESSION['mat']);
			$getP = $prof->getProfCoursId($_SESSION['mat']);
			//etudiant
			$prof_id = $prof->getProfId($_SESSION['mat']);
			
			// Etudiant-class
			$idclasse=$getP->classe_id;			
			$idas=$getP->promo_id;
			$getEtudiantClasse = $etudiants->getEtudiantClasse2($idclasse,$idas);

			//Prof Cours Classe
			$getPEC= $prof->getCoursClasseProf($idclasse,$_SESSION['mat']);

			//Cours Classes
			$getCc = $cours->getCoursClasse($idclasse);
			
			// var_dump($idas);die();
	
			include('Vues/Prof/myclasse.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}
	
	function MyClassCours(){
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
	
			$getPc = $prof->getProfCoursId2($_SESSION['mat']);
			$getP = $prof->getProfCoursId($_SESSION['mat']);
			//etudiant
			$prof_id = $prof->getProfId($_SESSION['mat']);
			
			// Etudiant-class
			$idclasse=$getP->classe_id;			
			$idas=$getP->promo_id;
			$getEtudiantClasse = $etudiants->getEtudiantClasse2($idclasse,$idas);

			//Prof Cours Classe
			$getPEC= $prof->getCoursClasseProf($idclasse,$_SESSION['mat']);

			//Cours Classes
			$getCc = $cours->getCoursClasse($idclasse);
			
			// var_dump($idas);die();
	
			include('Vues/Prof/mycours.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

	
	function Matiere(){
		if(@$_SESSION['logged']){
	
			include('Vues/Prof/matiere.php');
		}else{			
			include('Vues/Admin/error500.php');
		}
	}

