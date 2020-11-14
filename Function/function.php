<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - function.php</b> Пользовательская функция function<br>';
echo '('.__FILE__.')'.'<br>';
//---------------------------------------------

$array=[
        ['name'=>'Jon',
         'age'=>21,
         'email'=>'jon@i.ua'],
        ['name'=>'Ben',
         'age'=>29,
         'email'=>'ben@i.ua'],
        ['name'=>'Ted',
         'age'=>34,
         'email'=>'ted@i.ua'],
];

//----------------------------------------
$anonim=function($iset){
    return $iset;
};
$wow=$anonim($array);

echo '<br><pre>$wow= ';
print_r($wow);
echo '</pre>';

//----------------------------------------
function main($sey,$arr){
    $result=[];
    foreach($arr as $value){
        $result[]=$value[$sey];
    }
    return $result;
}
$show=main('email',$array);

echo '<br><pre>$show= ';
print_r($show);
echo '</pre>';

//----------------------------------------
function map($fnc){
    echo '<br><pre>$fnc= ';
        echo $fnc('DDD');
    echo '</pre><br>';    
};

map(function($ust){
    echo '<br>$ust= ';
        echo $ust;
    echo '<br>';

    $ust='FFF';
    return $ust;
});