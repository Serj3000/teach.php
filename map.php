<?php

$isets=[
    ['name'=>'Joe',
     'age'=>'34',
     'email'=>'joe@i.ua'],
    ['name'=>'Doe',
     'age'=>'28',
     'email'=>'doe@i.ua'],
    ['name'=>'Tom',
     'age'=>'32',
     'email'=>'tom@i.ua'],
];

function map($isets,$func){
    $result=[];
        foreach($isets as $iset){
            $result[]=$func($iset);
        }
    return $result;
}

$emails=map($isets,function($user){
    echo '<br>'.$user['email'];
    return $user['email'];
});
$age=map($isets,function($user){
    echo '<br>'.$user['age'];
    return $user['age'];
});
$name=map($isets,function($user){
    echo '<br>'.$user['name'];
    return $user['name'];
});

debug($emails);
debug($age);
debug($name);