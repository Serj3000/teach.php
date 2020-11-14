<?php

//echo '<br><b>а) ------- Композиция -------</b><br>';

class KompositHead 
{
    public function print(){
        echo '<br>HEAD (Композиция)<hr>';
    }
}
 
class KompositFooter
{
    public function print(){
        echo '<br>FOOTER (Композиция)<hr>';
    }
}
 
class KompositBody
{
    public function print(){
        echo '<br>BODY (Композиция)<hr>';
    }
}
 
class KompositAll
{
    public function go(){
        $head = new KompositHead();
        $body = new KompositBody();
        $footer = new KompositFooter();
        
        $head->print();
        $body->print();
        $footer->print();
    }
}

$print = new KompositAll();
$print->go(); // HEAD BODY FOOTER
