<?php
require_once('../../Models/Admin/prof.class.php');
$profs = new Prof();

$cours=isset($_POST['cours'])?$_POST['cours']:""; 
$profid=isset($_POST['id'])?$_POST['id']:""; 
$promo=isset($_POST['promo'])?$_POST['promo']:""; 

if(empty($cours)){
  echo '
	<strong style="color: red;">Erreur 403:</strong> Veuillez completer ce libellé SVP !
  ';
}else{
 // $add = null;
 $add = $profs->setProfCours($profid,$cours,$promo);
  if(!empty($add)){
	echo "<span class='alert alert-pro alert-success alert-dismissible col-sm-12'>
             <div class='alert-text'>
                 <h6>Successful</h6>
                 <p>Your dep has been successfully added. </p>
            </div>
            <button type='button' class='close' data-dismiss='alert'>x</button>
        </span>";
	// echo "<script>window.location.href='index.php?p=profs'</script>"; 
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


   