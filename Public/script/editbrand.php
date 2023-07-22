<?php 
require_once('../../Models/Admin/brand.class.php');
$brands = new Brand();

$id = htmlspecialchars(trim($_POST['id']));
$brand=isset($_POST['brand'])?$_POST['brand']:""; 
if(empty($id)){
	echo '
	<strong style="color: red;">Erreur 403:</strong> Cette marque n\'existe pas
	';
  }elseif(empty($_POST['brand'])){
	echo '
	<strong style="color: red;">Erreur 403:</strong> Veuillez completer le champ nom du categorie SVP !
	';
  }else{
    $add = $brands->updateBrand($brand,$id);
	if(empty($add)){
	  echo '
	  <strong style="color: red;">Erreur 401:</strong> Cette categorie n\'existe pas.
	  ';
	}else{
	  if ($add) {
		echo '
		<strong style="color: green;">Succes:</strong> Categorie est modifiee avec succes .
		';
		echo "<script>window.location.href='index.php?p=brands'</script>"; 
	  }else{
		echo '
		<strong style="color: red;">Erreur 401:</strong> Marque existe deja.
		';
	  }
  
	}
  
  }





 ?>