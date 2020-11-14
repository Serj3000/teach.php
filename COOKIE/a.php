<?php
//
//Точка входа
//
session_start();

if(!isset($_SESSION['username'])&&isset($_COOKIE['username'])){
    $_SESSION['username']=$_COOKIE['username'];
}

if(!isset($_SESSION['username'])){
    header("Location:/COOKIE/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A</title>
</head>
<body>
    Вы зашли как <?=$_SESSION['username'] ?><br>
    | <a href="login.php">Exit</a>
</body>
</html>
