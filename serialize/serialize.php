<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - serialize.php</b> Сериализация объекта serialize() <br>';
echo '('.__FILE__.')'.'<br>';

require_once 'serialize/cls.php';

$obj=new Cls(100);

$text=serialize($obj);

$fd=fopen('serialize/text.obj', 'w');
fwrite($fd, $text);
fclose($fd);
