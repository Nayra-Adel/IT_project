<?php
$db = new Mysqli;
$db->connect('localhost', 'root', '12345678', 'Films');
if(!$db){
	echo "success";
}
?>
