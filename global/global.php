<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - global.php</b> Инструкция global <br>';
echo '('.__FILE__.')'.'<br>';

$month="Май<br>";
$a=100;

function getMonth()
{
    global $month;
    $month="Ser";
    $a=&$GLOBALS['a'];
    $a=150;
    return [$month, $a];
};

echo $month.' '. $a;
var_dump(getMonth());
echo $month.' '. $a;
