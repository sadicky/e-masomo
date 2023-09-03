<?php
require_once('../../Models/Admin/classe.class.php');
$classes = new Classe();

$dep=isset($_POST['dep'])?$_POST['dep']:""; 
$classe=isset($_POST['niv'])?$_POST['niv']:""; 

if(empty($classe)){
  echo '
	<strong style="color: red;">Erreur 403:</strong> Veuillez completer ce libellé SVP !
  ';
}else{
 // $add = null;
 $add = $classes->setClasse($dep,$classe);
  if(!empty($add)){
	echo "<span class='alert alert-pro alert-success alert-dismissible col-sm-12'>
             <div class='alert-text'>
                 <h6>Successful</h6>
                 <p>Your dep has been successfully added. </p>
            </div>
            <button type='button' class='close' data-dismiss='alert'>x</button>
        </span>";
	echo "<script>window.location.href='index.php?p=classes'</script>"; 
}
  else{
	  echo "<span class='alert alert-pro alert-danger alert-dismissible col-sm-12'>
                 <div class='alert-text'>
                     <h6>Error!!</h6>
                     <p>Your dep has not been added. </p>
                </div>
               <button type='button' class='close' data-dismiss='alert'>x</button>
            </span>";
	}
}

 
?>


   