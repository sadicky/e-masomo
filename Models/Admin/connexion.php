<?php
function getConnection(){
	$db=new PDO("mysql:host=localhost;dbname=repair","root","");
	return $db;
}

?>