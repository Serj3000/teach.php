<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - komposit.php</b> Композиция, Агрегация, Наследование, Ассоциация<br>';
echo '('.__FILE__.')'.'<br>';



echo '<br><b>а) ------- Композиция -------</b><br>';
include 'komposit.php';

echo '<br><b>б) ------- Агрегация -------</b><br>';
include 'agrigation.php';

echo '<br><b>в) ------- Наследование -------</b><br>';
include 'extends.php';

echo '<br><b>в) ------- Ассоциация (направленная) -------</b><br>';
include 'associate.php';