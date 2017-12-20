<?php
session_start();
?>
<?php
include 'CMS\db.php'; 

$email = $_POST["email"];
$password = $_POST["password"];

if(isset($_POST['login'])){

	$sql = "select * from user where email = '$email' and password = '$password'";
	$query = $db->query($sql);
   

	$row = $query->fetch_assoc();

    if ($row['type'] == "admin") {
    	 $_SESSION["signedEmail"] = $email;
         header('location: CMS\index.php');
    } else if($row['type'] == "user"){
        //reham
    }else{
    	$_SESSION["signedEmail"] = $email;
    	header('location: login.php');
    }
}
else if(isset($_POST['register'])){
	$sql = "insert into Films.user (password, type, email) VALUES ('$password', 'user', '$email')";
	$query = $db->query($sql);

    if ($query) {
        $_SESSION["signedEmail"] = $email;
        //reham
    }else{
         header('Location: login.php');
    }
}