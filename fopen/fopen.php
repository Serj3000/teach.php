<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - fopen.php </b> Функция fopen( ) <br>';
echo '('.__FILE__.')'.'<br>';

$file_path='fopen/fileDescript.txt';

$fd=fopen($file_path, 'r');

echo '<br><br>><b>Код</b><br>';
echo '<br><i> $file_path="fopen/fileDescript.txt";</i><br>';
echo '<i> $fd=fopen($file_path, "r");</i><br><br>';
echo '<br>> <b>Результат выполнения кода 2 </b><br>';
echo '<br>'.$fd.'<br>';