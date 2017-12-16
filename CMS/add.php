<?php 
include 'db.php';
if (isset($_POST['send'])) {
	$name = htmlspecialchars($_POST['task']); // any sql congection
	$query = "insert into Films.filmsTable (name) VALUES ('$name')";
	$val = $db->query($query);
	if($val){
		 // echo "<h1>Successfuly inserted</h1>";
		header('location: index.php');
	}else{ echo "error"; }
}
?>