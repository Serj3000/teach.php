<?php
//
//Авторизация
//
function Login($username,$remember){
    if($username!='qwe'){
        return false;
    }

    $_SESSION['username']=$username;

    if($remember){
        setcookie('username',$username,time()+3600);
        return true;
    }
}
//
//Сброс авторизации
//
function Logout(){
    //Делаем кукис устаревшими (это единственный способ их удалить программно)
    setcookie('username','',time()-1);
    //Сбросить сессию
    unset($_SESSION['username']);
}
//
//Точка входа
//
session_start();

if(count($_POST)>0){
    $enter_site=Login($_POST['username'],$_POST['remember']);
    if($enter_site){
        header("Location:/COOKIE/a.php");
        exit;
    }
}else{
    Logout();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teach.php</title>
</head>
<body>
    <h2></h2>
<?php
echo '<br>======================================================================<br>';
echo '<b>Пример №# - login.php</b> Суперглобальный массив - $_COOKIE <br>';
echo '('.__FILE__.')'.'<br><br>';
?>
        <form action="" method="post">
            Enter name:<br>
            <input type="text" name="username"><br>
            <input type="checkbox" name="remember">Remember me<br>
            <input type="submit" value="OK">
        </form>
</body>
</html>