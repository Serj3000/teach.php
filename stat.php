<?php

class Tim{

    public static $x='Class $x=Tim';
    public $y='Class $y=Tim';

    public static function grp(){
        echo '<br> Tim::grp() ';
        return static::$x;//Tim::$x
    }
}

class Prod extends Tim{

    public static $x='Class $x=Prod';
    public $y='Class $y=Prod';

    public function __construct(){
        echo '<br>'.$this->y;
    }

    public static function grp(){
        echo '<br> Prod::grp() ';
        return self::$x;//Tim::$x
    }
}



$watch=Tim::grp();
echo '<br>'.$watch;

$hotch=new Prod();


//-----ООП--------------------
class Cat {
  public $age = 1225;
    
  function foo() {
    //echo '<br>'.$this->age;
    return $this->age;
  }
}

$ccc=new Cat();
echo '<br>ETTTTTTTT';
echo $ccc->foo();
//echo '<br>'.$ccc;


class my_Cat extends Cat {
  public $age = 10;
}

$kitty = new my_Cat;
$kitty->foo();

class Pig extends my_Cat{
  public $age = 15;
}

class Dog{
  public $strip;

  public function __construct($param){
    $x=$this->strip=$param;
    //debug($this->strip=$param);
    return $x;
  }

  public function see(Cat $param){
    echo '<br>'.$param->foo();
  }
}

$ritm=new Dog('LLLTTTT');
//debug($ritm);
echo $ritm->strip;

$ritm->see(new Cat);


//$ritm->see(new Pig);