<?php

namespace Classes;

class Publics {
    public $name;

    public function __construct($name='Sam') {
        echo '<br>('.__FILE__.')<br>';
        $this->name = $name;
        return $this->name;
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
