<?php
require_once('../../Models/Admin/dep.class.php');
$deps = new Dep();
$id=isset($_POST['id'])?$_POST['id']:'';

if($id)
{
    $delete = $deps->deleteDep($id);
	if($delete)
	echo "<script>window.location.href='index.php?p=dep'</script>";
	else echo "non ajoute";
}
	
?>