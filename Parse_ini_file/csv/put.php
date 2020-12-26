<?php

$file_put='Parse_ini_file\csv\data.csv';

$list=[
    '№4#,Petr,Ivanovich,Petrov',
    '№5#,Ivan,Pavlovich,Novikov'
];

$fd=fopen($file_put, 'a');

foreach($list as $line){
    echo '<br> '.$line;
    fputcsv($fd, explode(',', $line), ";");
}

fclose($fd);

echo '<br>Status: Ok';