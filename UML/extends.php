<?php

//echo '<br><b>а) ------- Наследование -------</b><br>';

class ExtendsHead
{
    public function printHead(){
        echo '<br>HEAD (Наследование)<hr>';
    }
}

class ExtendsFooter extends ExtendsHead
{
    public function printFooter(){
        echo '<br>FOOTER (Наследование)<hr>';
    }
}

class ExtendsBody extends ExtendsFooter
{
    public function printBody(){
        echo '<br>BODY (Наследование)<hr>';
    }
}

class ExtendsAll extends ExtendsBody
{

}

$print = new ExtendsAll();
$print->printHead();
$print->printBody();
$print->printFooter();