<?php 
require_once('../../Models/Admin/tech.class.php');
$technicians = new Technician();

$id = htmlspecialchars(trim($_POST['id'])); 
$names=isset($_POST['names'])?$_POST['names']:""; 
$phone=isset($_POST['phone'])?$_POST['phone']:""; 
if(empty($id)){
	echo '
	<strong style="color: red;">Erreur 403:</strong> Cette marque n\'existe pas
	';
  }
  else{
    $add = $technicians->updateTech($names,$phone,$id);
	if(empty($add)){
	  echo '
	  <strong style="color: red;">Erreur 401:</strong> Ce Technicien n\'existe pas.
	  ';
	}else{
	  if ($add) {
		echo '
		<strong style="color: green;">Succes:</strong> Technicien modifié avec succes .
		';
		echo "<script>window.location.href='index.php?p=technicians'</script>"; 
	  }else{
		echo '
		<strong style="color: red;">Erreur 401:</strong> Technicien existe deja.
		';
	  }
  
	}
  
  }





 ?>