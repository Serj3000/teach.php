<?php

//echo '<br><b>б) ------- Агрегация -------</b><br>';

class AgrigationHead 
{
    public function print(){
        echo '<br>HEAD (Агрегация)<hr>';
    }
}

class AgrigationFooter
{
    public function print(){
        echo '<br>FOOTER (Агрегация)<hr>';
    }
}

class AgrigationBody
{
    public function print(){
        echo '<br>BODY (Агрегация)<hr>';
    }
}

class AgrigationAll
{
    public function go($h, $b, $f)
    {        
        $h->print();
        $b->print();
        $f->print();
    }
}
$head = new AgrigationHead();
$body = new AgrigationBody();
$footer = new AgrigationFooter();
 
$print = new AgrigationAll();
$print->go($head, $body, $footer); // HEAD BODY FOOTER