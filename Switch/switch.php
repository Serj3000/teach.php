<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - switch.php</b> Цикл - switch() <br>';
echo '('.__FILE__.')'.'<br>';
//=================================================

for($i=1;$i<10;$i++){
$a=rand(1,15);

    switch($a){
        case 1:
            echo '<br>---';
            echo $a;
            echo '---<br>';
            break;
        case 5:
            echo '<br>---';
            echo $a;
            echo '---<br>';
            break;
        case 10:
            echo '<br>---';
            echo $a;
            echo '---<br>';
            break;
        default:
            echo '<br>---';
            echo 'Нет';
            echo '---<br>';
    }
}