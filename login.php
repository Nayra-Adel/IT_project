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
<form class="login" action="nayra.php" method="post" name = "login" onsubmit="return verifyEmail(document.login)" >
    <input class="inputStyle" type="text" name = "email" placeholder="Email"> <br>
    <input class="inputStyle" type="password" name = "password" placeholder="Password"> <br>
    <input class="submitStyle" type="submit" name = "login" value="Let me in!" ">
    <input class="submitStyle"  type="submit" name  = "register" value="I'm New Here">
</form>
<script src = "verify.js" ></script>
</body>
</html>
