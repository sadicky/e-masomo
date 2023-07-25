<?php 
require_once('../../Models/Admin/market.class.php');
$technicians = new Marketter();

$id = htmlspecialchars(trim($_POST['id'])); 
$names=isset($_POST['names'])?$_POST['names']:""; 
$phone=isset($_POST['phone'])?$_POST['phone']:""; 
if(empty($id)){
	echo '
	<strong style="color: red;">Erreur 403:</strong> Cette marque n\'existe pas
	';
  }
  else{
    $add = $technicians->updateMarket($names,$phone,$id);
	if(empty($add)){
	  echo '
	  <strong style="color: red;">Erreur 401:</strong> Ce Agent n\'existe pas.
	  ';
	}else{
	  if ($add) {
		echo '
		<strong style="color: green;">Succes:</strong> Agent modifié avec succes .
		';
		echo "<script>window.location.href='index.php?p=marketters'</script>"; 
	  }else{
		echo '
		<strong style="color: red;">Erreur 401:</strong> Agent existe deja.
		';
	  }
  
	}
  
  }





 ?>