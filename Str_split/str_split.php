<?php

//Преобразует строку в массив
echo '<br>======================================================================<br>';
echo '<b>Пример №8 - str_split.php</b> Функция str_split<br>';
echo '('.__FILE__.')'.'<br>';


$str='Helloy';
$array=str_split($str,2);

echo '<br><pre>';
print_r($array);
echo '</pre>';

foreach($array as $key){
    echo '<br>';
    print_r($key);
}