<?php

echo '<b>Пример №# - unserialize.php</b> Десериализация объекта unserialize() <br>';
echo '('.__FILE__.')'.'<br>';

require_once 'serialize/cls.php';

$ufd=fopen('serialize/text.obj', 'r');
$textu=fread($ufd, filesize('serialize/text.obj'));
fclose($ufd);

$uobj=unserialize($textu);

echo '<pre>';
print_r($uobj);
echo '</pre>';
