<?php
require_once('../../Models/Admin/classe.class.php');
$tech = new Classe();
$id=isset($_POST['id'])?$_POST['id']:'';

if($id)
{
    $active = $tech->deleteClasse($id);
	if($active){
        echo "<script>window.location.href='index.php?p=classes'</script>";
        echo "<span class='alert alert-pro alert-success alert-dismissible col-sm-12'>
                 <div class='alert-text'>
                     <h6>Successful</h6>
                     <p>Your Brand has been successfully added. </p>
                </div>
                <button type='button' class='close' data-dismiss='alert'>x</button>
            </span>";
    } 
	else echo "non ajoute";
}
	
?>