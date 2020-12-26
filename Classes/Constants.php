<?php

namespace Classes;

echo '<br>======================================================================<br>';
echo '<b>Пример №#</b> - Constants.php';
echo '<br>------- const CLASSCONST="Значение константы" -------<br>';
echo '('.__FILE__.')<br>';

class Constants
{
    public $parametr;
    const CLASSCONST='<br><b>Значение константы</b><br>';


    public function brem()
    {
        echo self::CLASSCONST;
    }
}