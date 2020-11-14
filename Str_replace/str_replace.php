<?php

//Заменяет асе вхождения строки поиска search на строку замены replace
echo '<br>======================================================================<br>';
echo '<b>Пример №2 - str_replace.php</b> Функция str_replace<br>';
echo '('.__FILE__.')'.'<br>';

// $search='\\';
// $replace='/';

$subject='App\Sprt\fret';

$path=str_replace('\\','/', $subject);

echo '<br> До замены '.$subject;
echo '<br> После замены '.$path;