<?php
//implode
//Объединяет элементы массива в строку
echo '<br>======================================================================<br>';
echo '<b> Пример №6 - implode.php</b> Функция implode<br>';
echo '('.__FILE__.')'.'<br>';

$array=['элемент массива - 1','элемент массива - 2','элемент массива - 3'];

$chek=implode('///',$array);

echo '<br> Дан массив ["элемент массива - 1","элемент массива - 2","элемент массива - 3"]';
echo '<br> Объеденим его в строку с разделителем "///"<br>';
print_r($chek);