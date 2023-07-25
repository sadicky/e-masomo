<?php
require_once('../../Models/Admin/tech.class.php');
$techs = new Technician();

$names = htmlspecialchars(trim($_POST['names']));
$phone = htmlspecialchars(trim($_POST['phone']));

        if(!empty($names) && !empty($cpwd)){
            echo "<span class='alert alert-pro alert-dismissible alert-danger col-sm-12 pb-5 mt-5'>
            <strong>Erreur:</strong> Ces champs ne doivent pas être vide.<br/>";
        }else{
            $add = $techs->setTechnicians($names,$phone);  
            if($add){
                echo "<span class='alert alert-pro alert-success alert-dismissible  col-sm-12'>
                <strong>L'tilisateur</strong> est enregistré avec succes.<br/>";
                
                echo "<script>window.location.href='index.php?p=technicians'</script>";  
            }
            else{
                echo "<span class='alert alert-pro alert-dismissible alert-danger  col-sm-12'>erreur d'insertion </span>";
                }
            
        }

   
	//
?>
   