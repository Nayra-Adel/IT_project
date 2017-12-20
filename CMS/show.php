<?php
include 'db.php';
$id = (int)$_GET['id'];
$sql = "select * from filmsTable where id = '$id'";
$rows = $db->query($sql);

$row = $rows->fetch_assoc();

echo  "<br>Name: ". $row["name"];
echo "<br>".'<img src="film_img/'.$row["img"].'"/>';
echo "<br>Description" . $row['description'];
echo "<br>----------------------------------------<br>";

$db->close();
?> 