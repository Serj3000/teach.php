<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - file.php </b> Функция file( ) <br>';
echo '('.__FILE__.')'.'<br>';

$read=file('./file/textFile.txt');

echo '<br><pre>';
print_r($read);
echo '<br></pre>';