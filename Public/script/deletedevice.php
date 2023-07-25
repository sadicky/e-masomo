<?php
require_once('../../Models/Admin/device.class.php');
$devices = new Device();
$id=isset($_POST['id'])?$_POST['id']:'';

if($id)
{
    $delete = $devices->deleteDevice($id);
	if($delete)
	echo "<script>window.location.href='index.php?page=devices'</script>";
	else echo "non ajoute";
}
	
?>