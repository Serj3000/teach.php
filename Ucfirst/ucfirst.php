<?php

//Преобразует первый символ строки в верхний регистр
echo '<br>======================================================================<br>';
echo '<b>Пример №5 - ucfirst.php</b> Функция ucfirst<br>';
echo '('.__FILE__.')'.'<br>';

$foo = 'hello world!';
echo '<br>Было: '.$foo;
$foo = ucfirst($foo);             // Hello world!
echo '<br>Стало: '.$foo;


$bar = 'HELLO WORLD!';
$bar = ucfirst($bar);             // HELLO WORLD!
$bar = ucfirst(strtolower($bar)); // Hello world!
