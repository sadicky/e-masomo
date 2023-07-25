<?php
session_start();
require_once('../../Models/Admin/order.class.php');
$orders = new Repair();

$customer_name=isset($_POST['names'])?$_POST['names']:""; 
$customer_tel=isset($_POST['phone'])?$_POST['phone']:""; 
$serial_number=isset($_POST['serial'])?$_POST['serial']:""; 
$defect_id=isset($_POST['defect'])?$_POST['defect']:""; 
$diagnostic=isset($_POST['diag'])?$_POST['diag']:""; 
$has_warranty=isset($_POST['warranty'])?$_POST['warranty']:""; 
$tech_id=isset($_POST['tech'])?$_POST['tech']:""; 
$total=isset($_POST['total'])?$_POST['total']:""; 
$user_id=$_SESSION['id']; 

if(empty($customer_name)){
  echo '
	<strong style="color: red;">Erreur 403:</strong> Veuillez completer ce libellé SVP !
  ';
}else{
 // $add = null;
 $add = $orders->setRepairOrder($customer_name,$customer_tel,$serial_number,$total,$defect_id,$diagnostic,$user_id,$has_warranty,$tech_id);
  if(!empty($add)){
	echo "<span class='alert alert-pro alert-success alert-dismissible col-sm-12'>
             <div class='alert-text'>
                 <h6>Successful</h6>
                 <p>Your Order has been successfully added. </p>
            </div>
            <button type='button' class='close' data-dismiss='alert'>x</button>
        </span>";
	echo "<script>window.location.href='index.php?p=orders'</script>"; 
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


   