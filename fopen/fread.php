<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - fread.php </b> Функция fread( ) — Бинарно-безопасное чтение файла<br>';
echo '('.__FILE__.')'.'<br>';

$file_path='fopen/fileDescript.txt';

if(filesize($file_path)>0){
$fd=fopen($file_path, 'r');
$readbl=fread($fd, filesize($file_path));
fclose($fd);

echo '<br><br>><b>Код</b><br>';
echo '<br><i> $file_path="fopen/fileDescript.txt";</i><br>';
echo '<i> if(filesize($file_path)>0){</i><br>';
echo '<i> $fd=fopen($file_path, "r");</i><br>';
echo '<i> $readbl=fread($fd, filesize($file_path));</i><br>';
echo '<i> fclose($fd);</i><br>';
echo '<i> print_r($readbl);</i><br>';
echo '<i> }else{</i><br>';
echo '<i> echo "Error: "</i><br>';
echo '<i> };</i><br>';
echo '<br>> <b>Результат выполнения кода </b><br>';

echo '<br><pre>';
print_r($readbl);
echo '<br></pre>';

}else{
echo "<br>Error: Размер прочитанных данных в байтах должен быть больше 0. Возможно, в указанном файле, ничего нет.<br>";
};