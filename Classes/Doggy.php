<?php 
class Person {
    private $name;

    public function __construct($name) {
        echo '<br><br><b>Пример №# (с "динамическими" классами) Classes/Doggy.php</b><br>';
        echo '('.__FILE__.')<br>';
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getTitle() {
        return $this->getName()." the person";
    }

    public function sayHello() {
        echo "Hello, I'm ".$this->getTitle()."<br/>";
    }

    public function sayGoodbye() {
        echo "Goodbye from ".self::getTitle()."<br/>";
    }
}

class Geek extends Person {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getTitle() {
        return $this->getName()." the geek";
    }
}



$geekObj = new Geek("Dany");
$geekObj->sayHello();
$geekObj->sayGoodbye();


//Подгружается фай класса Publics через функцию spl_autoload_register.
//Поэтому не нужно использовать include 'Classes/Publics.php';
use Classes\Publics;
$geekObj1 = new Publics('Ben');
echo '<br>';
print_r($geekObj1);