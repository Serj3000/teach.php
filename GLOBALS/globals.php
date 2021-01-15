<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - globals.php</b> Суперглобальный массив $GLOBALS <br>';
echo '('.__FILE__.')'.'<br>';

$a=100;

function getValus()
{
    $a=&$GLOBALS['a'];
    $a=150;
    return $a;
};

echo 'до '. $a.'<br>';
var_dump(getValus());
echo 'после '. $a.'<br>';