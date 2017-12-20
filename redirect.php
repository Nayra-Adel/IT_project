<?php
include 'CMS\db.php'; 
session_start();

$nada = $_SESSION['signedEmail'];

if(isset($_SESSION["signedEmail"])){
    $sql = "select type from user where email = '$nada'";
    $query = $db->query($sql);
   
    $row = $query->fetch_assoc();

    if($row['type'] == "admin"){
        header('location: CMS\index.php');
    }else{
        //reham
    }
}else{
    header('Location: login.php');
}