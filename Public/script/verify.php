<?php
require_once('../../Models/Admin/etudiant.class.php');
$etudiants = new Etudiant();

    $email = htmlspecialchars(trim($_POST['email']));
    $code = htmlspecialchars(trim($_POST["code"]));

    $add = $etudiants->setMailVerification($email,$code);  
    
    // var_dump($add);die();
       
    if($add==0)
    {
        echo "<span class='alert alert-pro alert-dismissible alert-danger  col-sm-12'>Erreur de Validation </span>";
        
    }else{
         
              echo "<script>window.location.href='index.php?p=plogin'</script>";  
	
        echo "<span class='alert alert-pro alert-success alert-dismissible  col-sm-12'>
        <strong>Réussi:</strong> Connectez-vous maintenant.<br/>";

    }

?>