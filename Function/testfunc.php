<?php

function map($fnc){

    echo '<br><pre>$fnc= ';
        print_r($fnc($ypa));
    echo '</pre><br>';
};

map(function($ypa){
    echo 'FFFF';
});