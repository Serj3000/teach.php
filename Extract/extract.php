<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - extract.php</b> Распоковка массива в таблицу символов - extract() <br>';
echo '('.__FILE__.')'.'<br>';

$bary=[];

for($i=1;$i<10;$i++){
    $key='human'.$i;
    $bary[$key]='job'.$i;
}

echo '<br>Формируем массив $bary=<br><pre>';
print_r($bary);
echo '</pre><br>';

//Распоковка массива $params в таблицу символов
extract($bary);

echo '<br>Подключаем файл test.php<br>';
include 'Extract/test.php';
