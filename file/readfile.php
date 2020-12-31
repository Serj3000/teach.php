<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - readfile.php </b> Функция readfile( ) <br>';
echo '('.__FILE__.')'.'<br>';

// #1 -----------------------------
echo '<br>><b>Случай #1</b><br>';
echo '<br> <i>readfile("file/textFile.txt");</i><br><br>';
echo '<br>><b> Результат выполнения кода 1 </b><br><br>';

readfile("file/textFile.txt");

// #2 -----------------------------
echo '<br><br>><b>Случай #2</b><br>';
echo '<br><i> $read_file=readfile("file/textFile.txt");</i><br>';
echo '<i> print_r($read_file);</i><br><br>';
echo '<br>> <b>Результат выполнения кода 2 </b><br><br>';

$read_file=readfile("file/textFile.txt");

echo '<br><pre>';
print_r($read_file);
echo '<br></pre>';