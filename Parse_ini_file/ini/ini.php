<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - ini.php </b> parse_ini_file( ) <br>';
echo '('.__FILE__.')'.'<br>';

$data=parse_ini_file("config.ini", true);
echo '<br><pre>';
print_r($data);
echo '</pre><br>';