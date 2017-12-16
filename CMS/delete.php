<?php 
include 'db.php'; 
$id = (int)$_GET['id'];
$sql = "delete from filmsTable where id = '$id'";
$val = $db->query($sql);
if($val){
	// echo "done";
	header('location: index.php');
}else{ echo "error"; }
?>