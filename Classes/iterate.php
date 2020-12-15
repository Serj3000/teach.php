<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - iterate.php </b>Итератора PHP <i>(Пример Итератора)</i> <br>';
echo '('.__FILE__.')'.'<br>';

class MyClass
{
    public $line='__________________________________________________';
    public $public_var1 = 'открытая(public) переменная значение 1';
    public $public_var2 = 'открытая(public) переменная значение 2';
    public $public_var3 = 'открытая(public) переменная значение 3';

    protected $protected = 'защищенная(protected) переменная значение 4';
    private   $private   = 'закрытая(private) переменная значение 5';

    public function iterateVisible() {
       echo "MyClass::iterateVisible:\n";
       foreach ($this as $key => $value) {
           print "$key => $value\n";
       }
    }
}

class SoonClass extends MyClass
{

    public function iterateVisible() {
       echo "SoonClass::iterateVisible:\n";
       foreach ($this as $key => $value) {
           print "$key => $value\n";
       }
    }
}

echo "\n";
$class = new MyClass();
foreach($class as $key => $value) {
    print "$key => $value\n";
}
echo "\n";
$class->iterateVisible();

echo "\n";
$plan= new SoonClass();
foreach($plan as $key => $value) {
    print "$key => $value\n";
}
echo "\n";
$plan->iterateVisible();