<?php

//Удаляет пробелы и другие символы в начале и конце строки
echo '<br>======================================================================<br>';
echo '<b>Пример №3 - trim.php</b> Функция trim<br>';
echo '('.__FILE__.')'.'<br>';

$text="\t\tThese are a few words :) ... ";
print "\n";
$tried=trim($text);
var_dump($tried);

$immed = trim($text, "\t.");
var_dump($immed);
