<?php
session_start();
$signedEmail = "signedEmail";
if(isset($_SESSION[$signedEmail])){
    $con = mysql_connect("localhost", "root", "12345678");
    mysql_select_db("user");
    $query = mysql_query("select type where email = $_SESSION[$signedEmail]");
    $row = mysql_fetch_array($query);
    if($row['type'] == "admin"){
        //nayra
    }else{
        //reham
    }
}else{
    header('Location: login.php');
}