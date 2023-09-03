<?php
require_once('../../Models/Admin/dep.class.php');
$deps = new Dep();

$dep=isset($_POST['dep'])?$_POST['dep']:""; 
$doyen=isset($_POST['doyen'])?$_POST['doyen']:""; 

if(empty($dep)){
  echo '
	<strong style="color: red;">Erreur 403:</strong> Veuillez completer ce libellé SVP !
  ';
}else{
 // $add = null;
 $add = $deps->setDep($dep,$doyen);
  if(!empty($add)){
	echo "<span class='alert alert-pro alert-success alert-dismissible col-sm-12'>
             <div class='alert-text'>
                 <h6>Successful</h6>
                 <p>Your Brand has been successfully added. </p>
            </div>
            <button type='button' class='close' data-dismiss='alert'>x</button>
        </span>";
	echo "<script>window.location.href='index.php?p=dep'</script>"; 
}
  else{
	  echo "<span class='alert alert-pro alert-danger alert-dismissible col-sm-12'>
                 <div class='alert-text'>
                     <h6>Error!!</h6>
                     <p>Your Brand has not been added. </p>
                </div>
               <button type='button' class='close' data-dismiss='alert'>x</button>
            </span>";
	}
}

 
?>


   