<?php 
require_once("connexion.php");
$db = getConnection();
$msg="";

if(isset($_POST['EMAIL'])){
    $pwd = uniqid(); 
    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

    $message = "Bonjour, voici votre nouveau mot de passe : $pwd";
    $headers = 'Content-Type: text/plain; charset="utf-8"'. " ";

    if(mail(isset($_POST['EMAIL']), 'Mot de passe oublié',$message,$headers)){
        $sql = "UPDATE tbl_users SET PWD=? WHERE EMAIL= ? ";
        $stmt = $db->prepare($sql);
        $stmt->execute([$hashPwd, $_POST['EMAIL']]);

        $msg='<strong style="color: blue;">Mail Envoyé</strong>';
        
      header("location:index.php?page=login");
    }
    else{      
      $msg='<strong style="color: red;">une Erreur est survenue...</strong>';
            }
}

/*
Email 'carolle@gmail.com'
Mot de passe '718930b5'
---------------------
Email 'dev@gmail.com'
Mot de passe '5df7791d'
----------------------
Email 'dsadicky@gmail.com'
Mot de passe 'e490578f'
*/ 
?>