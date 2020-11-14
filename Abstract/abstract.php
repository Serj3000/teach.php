<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - abstract.php</b> Abstract<br>';
echo '('.__FILE__.')'.'<br>';

abstract class Animal {
  public $name;
  private $age;
 
  public function __construct($name) {
    $this->name = $name;
    $this->say();
  }
 
  abstract public function say();
 
  public function getName() {
    return $this->name;
  }
}

class Cat extends Animal {
 
    public function __construct($name) {
    $this->name = $name;
    $this->say();
  }
 
  public function say() {
    echo "meow-meow ".$this->name;
    echo '<br>';
  }
}
 
class Dog extends Animal {
 
  public function __construct($name) {
    parent::__construct($name);
  }  
 
  public function say() {
    echo "woof-woof! ".$this->name;
    echo '<br>';
  }
}

new Cat('Kity');
new Dog('Boby');