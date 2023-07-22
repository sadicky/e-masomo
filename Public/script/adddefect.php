<?php
require_once('../../Models/Admin/defect.class.php');
$defects = new Defect();

$brand=isset($_POST['brand'])?$_POST['brand']:""; 
$title=isset($_POST['title'])?$_POST['title']:""; 
$price=isset($_POST['price'])?$_POST['price']:""; 
$time=isset($_POST['time'])?$_POST['time']:""; 

if(empty($brand)){
  echo '
	<strong style="color: red;">Erreur 403:</strong> Veuillez completer ce libellé SVP !
  ';
}else{
 // $add = null;
 $add = $defects->setDefect($title,$time,$price,$brand);
  if(!empty($add)){
	echo "<span class='alert alert-pro alert-success alert-dismissible col-sm-12'>
             <div class='alert-text'>
                 <h6>Successful</h6>
                 <p>Your Brand has been successfully added. </p>
            </div>
            <button type='button' class='close' data-dismiss='alert'>x</button>
        </span>";
	echo "<script>window.location.href='index.php?p=defects'</script>"; 
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


   