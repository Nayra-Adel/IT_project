<!DOCTYPE html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../Style/userMoviesPage.css">
</head>

<?php
include 'db.php';
$id = (int)$_GET['id'];
$sql = "select * from filmsTable where id = '$id'";
$rows = $db->query($sql);
$row = $rows->fetch_assoc();

echo "<div class='panel-heading header'>";
echo  "<br><center><h3 style='font-size:50px;color:#fff;'>".$row['name']." </h3></center></div> ";
echo "<br><center><img style='width:600px;height: 500px;' src='".$row['img'] ."'/></center>";
echo "<br><span font-size=50px style='color:#fff;'>Description: ".$row['description']." </span>";

$db->close();
?> 
