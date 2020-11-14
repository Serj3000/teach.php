<?php

//Пример пользовательской функции debug для просмотра и отладки фрагментов кода

function debug($param){
    echo '<br><br>('.__FILE__.')<br><br>';
    echo '<br><pre>';
        print_r($param);
    echo '</pre><br>';

    echo '<br><pre>';
        var_dump($param);
    echo '</pre><br>';
};