<?php 
include 'db.php';
if (isset($_POST['add_film'])) {
	$name = htmlspecialchars($_POST['name']); // any sql congection
	
	$img = $_FILES['image']['name']; 

	$description = htmlspecialchars($_POST['description']); // any sql congection

	$query = "insert into Films.filmsTable (name, img, description) VALUES ('$name', '$img', '$description')";
	$val = $db->query($query);
	if($val){
		 // echo "<h1>Successfuly inserted</h1>";
		header('location: index.php');
	}else{ echo "error"; }
}
?>