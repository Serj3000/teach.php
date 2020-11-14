<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - StaticClass.php</b> Ключевое слово - Static (Static, Self, Parent)<br>';
echo '('.__FILE__.')'.'<br>';

class A{
    public static $pabl='A';
    public $x='C ext A dinamic ';
    public static $y='D ext A dinamic ';

    public static function setPublic(){
        echo ' ---This is Class '.get_called_class().'---';
        return static::$pabl;
    }
}

class B extends A{
    public static $pabl='B';
}

class C extends A{
    public static function setPublic(){
        return self::$pabl;
    }
    public function thisPublic(){
        return $this->x;
    }
}

class D extends A{
    public static function setPublic(){
        return self::$pabl;
    }
    public function thisPublic(){
        return self::$y;
    }
}


echo '<br>'.A::setPublic();
echo '<br>'.B::setPublic();
echo '<br>'.C::setPublic();

echo '<br>'.A::$pabl;
echo '<br>'.B::$pabl;

$param=new C();
echo '<br>'.$param->thisPublic();
echo '<br>'.C::setPublic();
debug($param);
$param=new D();
echo '<br>'.$param->thisPublic();
echo '<br>'.$param->x;
//
//
//
class Mr
{
    public static function moo(){
        echo '<br>Class Mr<br>';
    }
}
class Nr extends Mr
{
    public static function too(){
        self::moo();
    }
}

Nr::moo();
//
//
//
class Ar {

    const CONST_VALUE = 'Значение константы';
    public static $var='Статическое свойсво';

    public static function foo() {
        static::who();    //класс вызывающий метод::who()
    }
    public static function test() {
        self::who();     //Ar::who()
    }
    public static function who() {
        echo '<br>1) Ar- '.__CLASS__."\n";
    }
}

class Br extends Ar {
    public static function test() {
        Ar::foo();       //Ar::foo()
        self::who();     //Br::who()
        parent::foo();   //Ar::foo()
        parent::test();  //Ar::test()
        self::foo();     //Br::foo()
    }
    public static function who() {
        echo '<br>2) Br- '.__CLASS__."\n";
        // echo '<br>_2.1 CONST_VALUE= '.self::CONST_VALUE;
        // echo '<br>_2.2 $var= '.self::$var;
    }
}

class Cr extends Br {
    public static function who() {
        echo '<br>3) Cr- '.__CLASS__."\n";
        // echo '<br>_3.1 CONST_VALUE= '.self::CONST_VALUE;
        // echo '<br>_3.2 $var= '.self::$var;
    }
}

Cr::test();