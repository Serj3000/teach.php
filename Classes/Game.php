<?php

echo '<br>======================================================================<br>';
echo '<br><br>('.__FILE__.')<br><br>';

class Game{
    const BR='<br>';
    const PH=7;

    var $name;
    var $photo;
    var $price;
    var $dir='img/';

    public function print_game(){
        echo "<hr>";
        echo "<div style='float:left;margin-right:140px;'>";
        echo "<font size='5px'>{$this->name}</font>".self::BR;
        echo "<img src='{$this->dir}{$this->photo}' width='250' height='200'>".self::BR;
        echo '$'.$this->price;
        echo self::BR;
        echo "</div>";
    }

    public function set_game($name,$photo,$price){
        $this->name=$name;
        $this->photo=$photo;
        $this->price=$price;
    }
}

$game=new Game();

$game->price=1.7;
$game->name='Forest';
$game->photo='2.jpeg';
$game->print_game();

$game->price=5.1;
$game->name='Island';
$game->photo='28.03.2020.PNG';
$game->print_game();

$game->set_game('Toy','2.jpeg','4');
$game->print_game();