<?php 
require_once('../../Models/Admin/device.class.php');
$devices = new Device();

$id = htmlspecialchars(trim($_POST['id']));
$brand=isset($_POST['brand'])?$_POST['brand']:""; 
$name=isset($_POST['name'])?$_POST['name']:""; 
$model=isset($_POST['model'])?$_POST['model']:""; 
if(empty($id)){
	echo '
	<strong style="color: red;">Erreur 403:</strong> Cette marque n\'existe pas
	';
  }elseif(empty($brand)){
	echo '
	<strong style="color: red;">Erreur 403:</strong> Veuillez completer le champ nom de l\'appareil SVP !
	';
  }else{
    $add = $devices->updateDevice($name,$model,$brand,$id);
	if(empty($add)){
	  echo '
	  <strong style="color: red;">Erreur 401:</strong> Cet appareil n\'existe pas.
	  ';
	}else{
	  if ($add) {
		echo '
		<strong style="color: green;">Succes:</strong> appareil modifié avec succes .
		';
		echo "<script>window.location.href='index.php?p=devices'</script>"; 
	  }else{
		echo '
		<strong style="color: red;">Erreur 401:</strong> Marque existe deja.
		';
	  }
  
	}
  
  }





 ?>