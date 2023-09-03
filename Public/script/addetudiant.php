<?php
require_once('../../Models/Admin/etudiant.class.php');
$etudiants = new Etudiant();

$nom = htmlspecialchars(trim($_POST['nom']));
$prenom = htmlspecialchars(trim($_POST['prenom']));
$email = htmlspecialchars(trim($_POST['email']));
$sexe = htmlspecialchars(trim($_POST['sexe']));
$mat = htmlspecialchars(trim($_POST['mat']));
$dob = htmlspecialchars(trim($_POST['dob']));
$niv = htmlspecialchars(trim($_POST['niv']));
$tel = htmlspecialchars(trim($_POST['tel'])); 
$promo = htmlspecialchars(trim($_POST['promo']));
$pwd = "12345";
$pwd=password_hash($pwd,PASSWORD_DEFAULT);

@$getEmail = $etudiants->getEtudiantEmail($email);

    if(@$getEmail->email!=$email){
        if(empty($nom) && empty($prenom) && empty($email)){
            echo "<span class='alert alert-pro alert-dismissible alert-danger col-sm-12 pb-5 mt-5'>
            <strong>Erreur:</strong> Ces champs ne doivent pas être vide.<br/>";
        }else{      
                $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 8);
        
                $subject = 'Email verification code';
                $body    = 'Your verification code is:'. $verification_code;
        
                $t = mail($email, $subject,$body,'From:admin@initelematique.com');
                
                
               $add = $etudiants->setEtudiant($nom,$prenom,$email,$sexe,$mat,$dob,$niv,$tel,$promo,$verification_code,$pwd); 
        
            if(!empty($add)){  
                // echo "<script>window.location.href='index.php?p=plogin'</script>";  
                echo "<script>window.location.href='index.php?p=verification&email=$email'</script>";  
               
                echo "<span class='alert alert-pro alert-success alert-dismissible  col-sm-12'>
                <strong>Message</strong> envoyé avec succes.<br/>";
            }
            else{
                echo "<span class='alert alert-pro alert-dismissible alert-danger  col-sm-12'>erreur d'insertion </span>";
                }
        }
    }else{
        echo "<span class='alert alert-pro alert-dismissible alert-danger  col-sm-12'>Erreur: Email existe déjà </span>";
        }

   
	//
?>
   