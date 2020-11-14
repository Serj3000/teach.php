<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - get.php</b> Суперглобальній массив - $_GET <br>';
echo '('.__FILE__.')'.'<br>';
//=================================================

$id=isset($_GET['id']) ? (int)$_GET['id'] : 1;

if(!($id>=1 && $id<=3)){
    die('error 404');
}

$id_next=($id<3) ? ($id+1) : 3;
$id_prev=($id>1) ? ($id-1) : 1;

$path='img/'.$id.'.jpg';
echo '<br><pre>';
print_r($path);
echo '<br></pre>';
?>

<img src='img/<?=$id ?>.jpg' width="300" hight="200">
<a href="?id=<?=$id_prev ?>">Prev</a>
<a href="?id=<?=$id_next ?>">Next</a>