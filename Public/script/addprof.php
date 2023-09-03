<?php
require_once('../../Models/Admin/prof.class.php');
$profs = new Prof();

$names = htmlspecialchars(trim($_POST['names']));
$mat = htmlspecialchars(trim($_POST['mat']));
$tel = htmlspecialchars(trim($_POST['tel']));
$titre = htmlspecialchars(trim($_POST['titre']));
$bio = htmlspecialchars(trim($_POST['bio']));
$sexe = htmlspecialchars(trim($_POST['sexe']));
$email = htmlspecialchars(trim($_POST['email']));
$niv = htmlspecialchars(trim($_POST['niv']));

@$getEmail = $profs->getProfEmail($email);

    if(@$getEmail->email!=$email){
        if(empty($names) && empty($email)){
            echo "<span class='alert alert-pro alert-dismissible alert-danger col-sm-12 pb-5 mt-5'>
            <strong>Erreur:</strong> Ces champs ne doivent pas être vide.<br/>";
        }else{      
                $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 8);
        
                $subject = 'Email verification code';
                $body    = 'Your verification code is:'. $verification_code;
        
                $t = mail($email, $subject,$body,'From:admin@initelematique.com');
                
                echo "<span class='alert alert-pro alert-success alert-dismissible  col-sm-12'>
                <strong>Message</strong> envoyé avec succes.<br/>";
                
               $add = $profs->setProf($titre,$mat,$names,$email,$bio,$sexe,$tel,$niv,$verification_code); 
        
                // header("Location: index.php?p=verification.php&email=" . $email);
                echo "<script>window.location.href='index.php?p=profs</script>"; 
                // echo "<script>window.location.href='index.php?p=verification.php&email='+$email+'</script>"; 
            if($add){
                echo "<script>window.location.href='index.php?p=profs</script>"; 
                echo "<span class='alert alert-pro alert-success alert-dismissible  col-sm-12'>
                <strong>Professeur</strong> enregistré avec succes.<br/>";
                
                // echo "<script>window.location.href='index.php?p=verification.php&email='+$email+'</script>"; 
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
   