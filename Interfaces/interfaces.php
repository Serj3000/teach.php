<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - interfaces.php</b> Interface<br>';
echo '('.__FILE__.')'.'<br>';

interface SomeInterface
{
    public function foom();

    public const STATUSES = [
        'OK'    => 0,
        'ERROR' => 1,
    ];
}

class SomeClass implements SomeInterface
{
    public function __construct(){
        $this->foom();
    }
    public function foom(){
        echo '<br>interfaces.php<br>';
        echo SomeInterface::STATUSES['OK'];
    }
}

new SomeClass();