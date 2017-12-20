<?php
include 'db.php';
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$sql = "select * from filmsTable";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "<br>Name: ". $row["name"];
        echo "<br>".'<img src="film_img/'.$row["img"].'"/>';
        echo "<br>Description" . $row['description'];
        echo "<br>----------------------------------------<br>";
    }
} else {
    echo "0 results";
}

$db->close();
?> 