<?php
require_once('../../Models/Admin/brand.class.php');
$brands = new Brand();
$id=isset($_POST['id'])?$_POST['id']:'';

if($id)
{
    $delete = $brands->deleteBrand($id);
	if($delete)
	echo "<script>
	window.location.href='index.php?page=articles'
	</script>";
	else echo "non ajoute";
}
	
?>