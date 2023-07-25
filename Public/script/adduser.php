<?php
require_once('../../Models/Admin/user.class.php');
$users = new User();

$email = isset($_POST['email'])?$_POST['email']:""; 
$username = htmlspecialchars(trim($_POST['username']));
$role = htmlspecialchars(trim($_POST['role']));
$phone = htmlspecialchars(trim($_POST['phone']));
$pwd = htmlspecialchars(trim($_POST['pwd']));
$cpwd = htmlspecialchars(trim($_POST['cpwd']));

@$getEmail = $users->getUserEmail($email);
    if(@$getEmail->email!=$email){
        if($pwd!=$cpwd){
            echo "<span class='alert alert-pro alert-dismissible alert-danger col-sm-12 pb-5 mt-5'>
            <strong>Erreur:</strong> Les mots de passe doivent être identique.<br/>";
        }else{
            $add = $users->setUser($username,$email,$phone,$pwd,$role);  
            if($add){
                echo "<span class='alert alert-pro alert-success alert-dismissible  col-sm-12'>
                <strong>L'tilisateur</strong> est enregistré avec succes.<br/>";
                
                echo "<script>window.location.href='index.php?p=users'</script>";  
            }
            else{
                echo "<span class='alert alert-pro alert-dismissible alert-danger  col-sm-12'>erreur d'insertion </span>";
                }
            
        }

    }
    else{
    echo "<span class='alert alert-danger alert-pro alert-dismissible  col-sm-12'>cette adresse email existe déjà </span>";
    }

	//
?>
   