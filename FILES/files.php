<?php
//
echo '<br>======================================================================<br>';
echo '<b>Пример №# - files.php</b> Суперглобальнй массив - $_FILES. Загрузка файла на сервер.<br>';
echo '('.__FILE__.')'.'<br>';
//=================================================
//
//
$max_image_width = 380;
$max_image_height = 600;
$max_image_size = 64 * 1024;
$valid_types = ["gif","jpg", "png", "jpeg","GIF","JPG", "PNG", "JPEG"];
//
//Точка входа (запуска) скрипта
//
if($_POST['subFile']){
    type_file($valid_types);
    print_r($_FILES);
}
//
// Проверка выбран ли файл и если выбран, то проверка его типа на соответсвие в массиве $valid_types
//
function type_file($valid_types){
    $file=[];
    if(!empty($_FILES['fileF']['name'])){
        $file=$_FILES['fileF'];
        $param=explode('.',$file['name']);
            if (!in_array($param[array_key_last($param)], $valid_types)) {
                echo '<br><b>Error:</b> Invalid file type.<br>';
            }else{
                // upload_file($file);
                make_dir($file);
            }
    }else{
        echo '<br><b>Error:</b> File not found.<br>';
    }
}
//
//Проверка размера файла
//
function size_file($file){
    $size = GetImageSize($file['tmp_name']);
}
//
//Проверка существования каталога, если  каталог не найден, то создает его
//
function make_dir($file){
    if(!file_exists(__DIR__.'\imga\\')){
        mkdir(__DIR__."\imga\\", 0700);
    }else{
        echo '<br><b>OK:</b> Directory is found.<br>';
    }
    upload_file($file);
}
//
//Загружает, после проверок, выбранный файл, в указаный каталог
//
function upload_file($file){
    if(copy($file['tmp_name'],__DIR__.'\imga\\'.$file['name'])){
        echo '<br><pre>';
        echo 'Файл '.$file['name'].' загружен';
        echo '<br></pre>';
    }else{
        echo '<br><pre>';
        echo 'Ошибка загрузки. '.'Error: { '.$file['error'].' }';
        echo '<br></pre>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файла на сервер</title>
</head>
<body>
    <h2>Загрузка файла на сервер</h2>
    <!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
    <form enctype="multipart/form-data" action="" method="POST">
        <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
        <br>Название элемента input определяет имя в массиве $_FILES<br>
        Отправить этот файл: <input type="file" name="fileF" value=""/>
        <input type="submit" value="Отправить файл" name="subFile" />
    </form>
</body>
</html>