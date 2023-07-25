<?php
require_once('../../Models/Admin/tech.class.php');
$devices = new Technician();
$id=isset($_POST['id'])?$_POST['id']:'';

if($id)
{
    $delete = $devices->deleteTech($id);
	if($delete){
        echo "<span class='alert alert-pro alert-success alert-dismissible col-sm-12'>
                 <div class='alert-text'>
                     <h6>Successful</h6>
                     <p>Your Brand has been successfully added. </p>
                </div>
                <button type='button' class='close' data-dismiss='alert'>x</button>
            </span>";
        echo "<script>window.location.href='index.php?page=technicians'</script>";
    }
	else {
        echo "non ajoute";
     }
}
	
?>