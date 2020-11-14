<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - Control.php </b>Работа с классами <i>(Пример Композиции)</i> <br>';
echo '('.__FILE__.')'.'<br>';

class Father
{
    public $a;

    public function brom(){
        echo '<br>';
        echo 'Class Father';
        echo '<br>';

        $this->a=new Sun();
        $this->a->telm();
    }

    public function treh(){
        $this->brom();
    }
}

class Sun
{
    public $b='class Sun public $b';
    public static $c='class Sun public static $c';
    public static $d;

    public function telm(){
        echo '<br>';
        echo 'Class Sun';
        echo '<br>';
    }
}

    $watch=new Father();
    $watch->treh();
    $look=$watch->a;
    $brexnia=$look::$c;
    echo '<br>';
    var_dump($brexnia);
    echo '<br>';
    var_dump(Sun::$d);

class Boom
{
    public $ba='class Sun public $ba';
    public static $bd='class Sun public static $bd';
    public static $bc;

    public function elm(){
        echo '<br>';
        echo 'Class Boom';
        echo '<br>';
    }
}

function bra($amc)
{
    var_dump($amc);
}


$trab=bra(new Boom);
echo '<br> $trab ';
var_dump($trab);
echo '<br> $trab->ba ';
var_dump($trab->ba);
echo '<br>';
//var_dump(Sun::$d);
