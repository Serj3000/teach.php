<?php

//Анонимная функция (Замыкание)
echo '<br>======================================================================<br>';
echo '<b>Пример №# - closures.php</b> Анонимная функция (замыкания) function($callback)<br>';
echo '('.__FILE__.')'.'<br>';
        // $func=function($user){
        //     echo '<br><pre>Анонимная функция $user= ';
        //         // print_r($user);
        //         var_dump($user);
        //     echo '</pre><br>';
        // };

        // $func($users);

        // $users=['name'=>'Joe',
        //         'fge'=>31,
        //         'email'=>'joe@i.ua'];

//---------------------------------

$items=[
         0=>['name'=>'Joe',
             'fge'=>31,
             'email'=>'joe@i.ua'],
         1=>['name'=>'Toe',
             'fge'=>36,
             'email'=>'toe@i.ua'],
         2=>['name'=>'Doe',
             'fge'=>29,
             'email'=>'doe@i.ua'],
        ];

function maps($items, $func){

    echo '<br><pre>$func= ';
        print_r($func);
    echo '</pre><br>';

    $result=[];
    foreach($items as $item){
            echo '<br><pre>$item= ';
                print_r($item);
            echo '</pre><br>';
        $results[]=$func($item);
    }
    return $results;
}

$emails=maps($items, function($user){
    return $user['email'];
});

$names=maps($items, function($user){
    return $user['name'];
});

    // echo '<br><pre>$emails= ';
    //     print_r($names);
    // echo '</pre><br>';

//________________________________________________
$g = 'test';

$c = function($a=1, $b=2) use($g){
    echo $a.' '.$b.' '.$g;
};

$g = 'test2';

echo '<br><pre>$c= ';
    print_r($c());//1 2 test
echo '</pre><br>';

echo '<br><pre>$c= ';
    print_r($c(0,'~'));//0 ~ test
echo '</pre><br>';
//________________________________________________