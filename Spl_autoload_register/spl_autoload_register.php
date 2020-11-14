<?php

//Регистрирует заданную функцию в качестве реализации метода _autoload
echo '<br>======================================================================<br>';
echo '<b>Пример №1 - spl_autoload_register.php</b> Функция spl_autoload_register<br>';
echo '('.__FILE__.')'.'<br>';


spl_autoload_register(function($class){
    $path=str_replace('\\', '/', $class).'.php';
    echo '<br>Загружаем файл с классом $path= '.$path.'<br>';
        if(file_exists($path)){
            include_once $path;
        }else{
            echo 'Файл с классом <b>'.$class.'</b> не обнаружен';
            exit;
        }
});

use Classes\Publics;

$geekObj = new Publics("Ludwig");
echo '<br>Метод sayHello() класса Publics<br>';
$geekObj->sayHello();
echo '<br>Метод sayGoodbye() класса Publics<br>';
$geekObj->sayGoodbye();
