<?php 
require_once('../../Models/Admin/order.class.php');
$orders = new Repair();

$id = htmlspecialchars(trim($_POST['id'])); 
$montant=isset($_POST['montant'])?$_POST['montant']:""; 
$date=isset($_POST['date'])?$_POST['date']:""; 
$statut=isset($_POST['statut'])?$_POST['statut']:""; 
if(empty($id)){
	echo '
	<strong style="color: red;">Erreur 403:</strong> Cette marque n\'existe pas
	';
  }
  else{
    $add = $orders->updatePay($montant,$date,$statut,$id);
	if(empty($add)){
	  echo '
	  <strong style="color: red;">Erreur 401:</strong> Ce Agent n\'existe pas.
	  ';
	}else{
	  if ($add) {
		echo '
		<strong style="color: green;">Succes:</strong> Agent modifié avec succes .
		';
		echo "<script>window.location.href='index.php?p=orders'</script>"; 
	  }else{
		return false;
	  }
  
	}
  
  }





 ?>