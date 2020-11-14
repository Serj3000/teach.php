<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - ob.php</b> Буферизация - ob_start(); flush(); ob_get_clean() <br>';
echo '('.__FILE__.')'.'<br>';
//=================================================

//Пример №2 буферизации 
ob_start(function($ctc) { static $a = 1; return $a++ . '- ' . $ctc . "\n";},1);
ob_start(function($ctc) { return ucfirst($ctc); }, 1);
    echo "fo";
    sleep(1);
    echo 'o';
    sleep(1);
    echo "barbazz";
    sleep(1);
    echo "hello";
ob_end_clean();
ob_end_clean();

//=================================================
//Пример №1 буферизации 
// echo "<h3>Please waiting for 10 seconds...</h3>";

// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
//     flush();
//     sleep(1);
// }

// echo "<h3>Thx! </h3>".$i;

//=================================================