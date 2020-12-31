<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - post.php</b> Суперглобальный массив - $_POST <br>';
echo '('.__FILE__.')'.'<br>';
//=================================================

if (count($_POST)>0){
    //trim() — Удаляет пробелы (или другие символы) из начала и конца строки
    $log=trim($_POST['login']);
    $pas=trim($_POST['password']);

    if($log=='' || $log==''){
        $result='Error';
    }else{
        $result='Ожидайте';
        //file_put_contents() — Пишет данные в файл
        file_put_contents('POST/input.txt', "$log - $pas\n", FILE_APPEND);
    }
}
?>

<form method="POST">
<pre>
<hr>
Login:
<br><input type="text" name="login"><br>
Password:
<br><input type="password" name="password"><br>
<input type="submit" value="Отправить" name="submit">
<hr>
<?=$result?>
</pre>

    <?php
    echo '<br><pre>$_POST=<br>';
    print_r($_POST);
    echo '<br>$_REQUEST=<br>';
    print_r($_REQUEST);
    echo '<br></pre>';
    ?>
</form>