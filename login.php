<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Martel+Sans:400,600|Monoton|Quicksand" rel="stylesheet">
    <title>Sign in\sign up</title>
</head>
<body>
<div class = "header">
    <p class="knock"><b>K</b>noc<b>K</b>nock..</p>
    <p class="who">Who is there ?</p>
</div>
<form class="login" action="#" method="post" name = "login" onsubmit="return verifyEmail(document.login)" >
    <input class="inputStyle" type="text" name = "email" placeholder="Email"> <br>
    <input class="inputStyle" type="password" name = "password" placeholder="Password"> <br>
    <input class="submitStyle" type="submit" name = "login" value="Let me in!" ">
    <input class="submitStyle"  type="submit" name  = "register" value="I'm New Here">
</form>
<script src = "verify.js" ></script>
</body>
</html>

<?php
$email = $_POST["email"];
$password = $_POST["password"];
if($_POST['action'] == 'login') {
    $con = mysql_connect("localhost", "root", "12345678");
    mysql_select_db("user");
    $query = mysql_query("select type where email = $email && password == $password");
    if ($query) {
        $row = mysql_fetch_array($query);
        if ($row['type'] == "admin") {
            header('location: CMS\index.php');
        } else {
            //reham
        }
    }else{
        header('Location: login.php');
    }
}else if($_POST['action'] == 'register'){
    $con = mysql_connect("localhost", "root", "12345678");
    mysql_select_db("user");
    $query = mysql_query("INSERT INTO USER(email, password, type) VALUES ($email, $password, 'user')");
    if ($query) {
        $_SESSION["signedEmail"] = $email;
        //reham
    }else{
        header('Location: login.php');
    }
}

