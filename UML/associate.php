<?php

//Направленная ассоциация

class HtmlUtils
{ 
    public static function specialChars($str) {
        //Здесь экранируем строку $str, заменяя все нужные символы
        return $str;
    }
}

class Vin 
{ 
    //private $page;
    public $page;
    //protected $page;
    public function render($text) {
        //.......
        $this->page = HtmlUtils::specialChars($text);
        //.......
    }
}

$assoc=new Vin;
$assoc->render('Односторонняя направленная Ассоциация');
echo '<br>$assoc= '.$assoc->page;

$ass=new Vin;
$ass->page='XREN';
echo '<br>$ass= '.$ass->page;

//Ассоциация может быть двухсторонней

// class Dug
// {
//     public static function display() {
//         echo $this->errorMsg;
//         //echo self::$errorMsg;
//     }
// }

// class Veg
// {
//     public $errorMsg = '<br>Message<br>';

//     public function someFunction() {
//         //Тело функции и если возникает ошибка то $error = 1;
//         if ($error) Dug::display();
//         Dug::display();
//     }
// }

// $assod=new Veg;
// $assod->someFunction();