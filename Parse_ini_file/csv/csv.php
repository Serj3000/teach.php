<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - csv.php </b>  <br>';
echo '('.__FILE__.')'.'<br>';

$path="Parse_ini_file\csv\data.csv"; // $path="Parse_ini_file\csv\csv.php";

$file_cvs=fopen($path, 'r') or die('Ошибка');

for($i=0;$data_csv=fgetcsv($file_cvs, filesize($path), ";");$i++){
        $row?null:$row=1;
        $num = count($data_csv);
        echo "<hr>\n";
        echo "<p><b> Строка №</b><span style='color: red;'> $row </span><b>, полей в строке</b><span style='color: blue;'> $num </span><br></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo "[$c]: ".$data_csv[$c] . "<br>\n";
        }
    }
fclose($file_cvs);

if($_POST['CSV']){
    echo 'Запуск записи ...';
    include 'Parse_ini_file\csv\put.php';
};

// include 'Parse_ini_file\csv\put.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="submit" name="CSV" value="записать в файл csv">
    </form>
</body>
</html>
