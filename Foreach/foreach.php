<?php

//Цикл перебора массива
echo '<br>======================================================================<br>';
echo '<b>Пример №# - foreach.php</b> Цикл для работы с массивами foreach<br>';
echo '('.__FILE__.')'.'<br>';

$users=[
        '0'=>['name'=>'Joe',
              'age'=>31,
              'email'=>'joe@i.ua'],

        '1'=>['name'=>'Toe',
              'age'=>36,
              'email'=>'toe@i.ua'],

        '3'=>['name'=>'Doe',
              'age'=>29,
              'email'=>'doe@i.ua'],

        '4'=>['Joe'=>48,
              'Mon'=>52,
              'Ted'=>31],

        'age'=>['Joe'=>27,
                'Mon'=>54,
                'Ted'=>69],
];
echo '<br><pre>Дан массив $users= ';
    print_r($users);
echo '</pre><br>';

$keys=[];
$values=[];

foreach($users as $key=>$value){
$keys[]=$key;
$values[]=$value;
}

echo '<br><pre>$key= ';
    print_r($key);
echo '</pre><br>';

echo '<br><pre>$values= ';
    print_r($values);
echo '</pre><br>';

foreach($values as $kode=>$param){
    $params[]=$param;
}

    if($params===$values){
        echo 'Yes ';
    }else{
        echo 'No ';
        echo '<br><pre>$values= ';
        print_r($values);
    }
    echo '<br><pre>$params= ';
    print_r($params);

//__________________________________________________________

$numbers=[1,2,3,4,5];
    echo '<br><pre>$numbers= ';
    print_r($numbers);

foreach($numbers as &$number):;
    $number=$number*2;
endforeach;

    echo '<br><pre>&$numbers= ';
    print_r($numbers);