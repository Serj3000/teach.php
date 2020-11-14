<?php
//
echo '<br>======================================================================<br>';
echo '<b>Пример №# - files.php</b> Суперглобальнй массив - $_FILES. Загрузка файла на сервер.<br>';
echo '('.__FILE__.')'.'<br>';
//=================================================
//
//
if(isset($_POST['subFile'])){
    echo '<br>'.$_POST['subFile'].'<br>';
    new FilesClass();
    $_POST=[];  
    echo '<br>$_POST= '.$_POST['subFile'].'<br>';
};
//
class FilesClass
{
    public $max_image_width = 380;
    public $max_image_height = 600;
    public $max_image_size =1024*64*5;
    public $valid_types = ["gif","jpg", "png", "jpeg","GIF","JPG", "PNG", "JPEG"];
    //
    //Точка входа (запуска) скрипта метод конструктор
    //
    public function __construct(){
        if($_POST['subFile']){
            $valid_types=$this->valid_types;
            $this->typeFile($valid_types);
            //print_r($_FILES);
            echo '<br><b>1) Method:</b> __construct.<br>';
        }
    }
    //
    // Проверка выбран ли файл и если выбран, то проверка его типа на соответсвие в массиве $valid_types
    //
    public function typeFile($valid_types){
        echo '<br><b>2) Method:</b> typeFile.<br>';
        $file=[];
        if(!empty($_FILES['fileF']['name'])){
            $file=$_FILES['fileF'];
                    $this->uploadFile($file);
            $param=explode('.',$file['name']);
                if (!in_array($param[array_key_last($param)], $valid_types)) {
                    echo '<br><b>Error:</b> Invalid file type.<br>';
                }else{
                    //$this->sizeFile($file);
                }
        }else{
            echo '<br><b>Error:</b> File not found.<br>';
        }
    }
    //
    //Проверка веса файла size
    //
    public function sizeFile($file){
        echo '<br><b>3) Method:</b> sizeFile.<br>';
        $size = $file['size'];
        $max_image_size=$this->max_image_size;
        if($size<=$max_image_size){
            $this->imageSize($file);
        }else{
            echo '<br><b>Error:</b> File to large. $size= '.$size.'<br>';
            echo '<br><b>Error:</b> Must be large. $max_image_size= '.$max_image_size.'<br>';
        }
    }
    //
    //Проверка размера изображения image
    //
    public function imageSize($file){
        echo '<br><b>4) Method:</b> imageSize.<br>';
        $image = GetImageSize($file['tmp_name']);
        $max_image_width = $this->max_image_width;
        $max_image_height = $this->max_image_height;

        if($image[0]>=$max_image_width&&$image[1]>=$max_image_height){
            $this->makeDir($file);
        }else{
            echo '<br><b>Error:</b> Image to large size. '.$image[0].' x '.$image[1].'<br>';
            echo '<br><b>Error:</b> Must be size. '.$max_image_width.' x '.$max_image_height.'<br>';
        }
    }
    //
    //Проверка существования каталога, если  каталог не найден, то создает его
    //
    public function makeDir($file){
        echo '<br><b>5) Method:</b> makeDir.<br>';
        if(!file_exists(__DIR__.'\imga\\')){
            mkdir(__DIR__."\imga\\", 0700);
        }else{
            echo '<br><b>OK:</b> Directory is found.<br>';
        }
        $this->uploadFile($file);
    }
    //
    //Загружает, после проверок, выбранный файл, в указаный каталог
    //
    public function uploadFile($file){
        echo '<br><b>6) Method:</b> uploadFile.<br>';
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