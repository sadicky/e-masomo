<?php
function getConnection(){
	$db=new PDO("mysql:host=localhost;dbname=memoire","root","");
	return $db;
}

?>