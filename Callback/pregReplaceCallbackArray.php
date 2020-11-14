<?php
echo '<br>======================================================================<br>';
echo '<b>Пример №# - pregReplaceCallbackArray.php</b> Анонимная функция preg_replace_callback_array<br>';
echo '('.__FILE__.')'.'<br>';

$text='Lorem Ipsum - это <em>текст - "рыба"</em>, часто используемый в <strong>печати</strong>';

echo '<br>Задан текст в формате HTML<br>'.$text;
echo '<br><br>Необходимо преобразовать его в формате bbCode<br>';

$bbCode=preg_replace_callback_array([
    "#<strong>(.+?)</strong>#"=>function($word){
        return '[b]'.$word[1].'[/b]';
    },
        "#<em>(.+?)</em>#"=>function($word){
        return '[i]'.$word[1].'[/i]';
    },
],$text);

echo '<br>'.$bbCode.'<br>';

//_________________________________________________________