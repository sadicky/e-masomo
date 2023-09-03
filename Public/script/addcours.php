<?php
require_once('../../Models/Admin/cours.class.php');
$c = new Cours();

$niv = htmlspecialchars(trim($_POST['niv']));
$cours = htmlspecialchars(trim($_POST['cours']));
$semestre = htmlspecialchars(trim($_POST['semestre']));

        if(empty($cours)){
            echo "<span class='alert alert-pro alert-dismissible alert-danger col-sm-12 pb-5 mt-5'>
            <strong>Erreur:</strong> Ces champs ne doivent pas être vide.<br/>";
        }else{
            $add = $c->setCours($cours,$semestre,$niv);  
            if($add){
                echo "<span class='alert alert-pro alert-success alert-dismissible  col-sm-12'>
                <strong>L'tilisateur</strong> est enregistré avec succes.<br/>";
                
                echo "<script>window.location.href='index.php?p=cours'</script>";  
            }
            else{
                echo "<span class='alert alert-pro alert-dismissible alert-danger  col-sm-12'>erreur d'insertion </span>";
                }
            
        }

   
	//
?>
   