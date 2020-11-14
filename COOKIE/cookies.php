<?php

setcookie("Cookie", "Test", time()+360);
setcookie("login", "admin", time()+360);
setcookie("password", "qwe", time()+360);

echo '<br>======================================================================<br>';
echo '<b>Пример №# - cookies.php</b> Суперглобальный массив - $_COOKIE <br>';
echo '('.__FILE__.')'.'<br>';
//=================================================

debug($_COOKIE);