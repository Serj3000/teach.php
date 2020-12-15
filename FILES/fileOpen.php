<?php

$filePath='FILES/text.txt';
echo '<br>1) pathinfo( )<br>';
print_r(pathinfo($filePath));
echo '<br>';

if(file_exists('FILES/text.txt')){

 //1._______________________________________________________________________________   
echo '<br>1) Read File (readfile — Выводит файл). Читает файл и записывает его в буфер вывода. '; print_r(pathinfo($filePath)['basename']); echo '<br>';
//readfile — Выводит файл. Читает файл и записывает его в буфер вывода. 
readfile($filePath);
echo '<br>---------------------<br>';
var_dump(readfile($filePath));
echo '<br>';

//2._______________________________________________________________________________
echo '<br>2) Write to File (fwrite — Бинарно-безопасная запись в файл)<br>';
$data=fopen($filePath,'a+');//a+t
//fwrite — Бинарно-безопасная запись в файл
fwrite($data, '23');
echo '<br>';
//fclose — Закрывает открытый дескриптор файла
fclose($data);

//3._______________________________________________________________________________
echo '<br>3) Read File (fread — Бинарно-безопасное чтение файла) <br>';
$handle=fopen($filePath,'r+');//r+t
// fread — Бинарно-безопасное чтение файла
$contents = fread($handle, filesize($filePath));
print_r($contents);
echo '<br>';
fclose($handle);

//4._______________________________________________________________________________
echo '<br>4) feof — Проверяет, достигнут ли конец файла. Позволяет использовать в цикле, например, при выводе всех символов из файла.<br>';
$hand=fopen($filePath,'r+');//r+t
//feof — Проверяет, достигнут ли конец файла (finde end of file).
while(!feof($hand)){
    echo fread($hand, 5).'<br>';
}
fclose($hand);

//5._______________________________________________________________________________
echo '<br>5) fseek — Устанавливает смещение в файловом указателе <br>';
$descr=fopen($filePath,'r+');//r+t
// fseek — Устанавливает смещение в файловом указателе
fseek($descr, 0);
echo fread($descr, 1).'<br>';
fclose($descr);

//6._______________________________________________________________________________
echo '<br>6) fgets — Читает строку из файла (file get string)<br>';
$ecrip=fopen($filePath,'r+');//r+t
// fgets — Читает строку из файла (file get string)
echo 'Первая строка файла'. fgets($ecrip).'<br>';
while(!feof($ecrip)){
echo fgets($ecrip).'<br>';
}
fclose($ecrip);

//7._______________________________________________________________________________
echo '<br>7) file_put_contents — Пишет данные в файл<br>';
//file_put_contents — Пишет данные в файл
file_put_contents($filePath, "Hi, i am a file_put_contents\n");

//8._______________________________________________________________________________
echo '<br>8) file_get_contents — Читает содержимое файла в строку<br>';
//file_get_contents — Читает содержимое файла в строку
echo file_get_contents($filePath);

//9._______________________________________________________________________________
echo '<br>9) Добавим данные в файл с помощью file_put_contents<br>';
// Открываем файл для получения существующего содержимого
$current = file_get_contents($filePath);
// Добавляем нового человека в файл
$current .= "\nJohn Smith";
// Пишем содержимое обратно в файл
file_put_contents($filePath, $current);
//file_get_contents — Читает содержимое файла в строку
echo file_get_contents($filePath);

//10._______________________________________________________________________________
echo '<br>10) file — Читает содержимое файла и помещает его в массив<br>';
// file — Читает содержимое файла и помещает его в массив
$contents=file($filePath);
$i=0;
foreach($contents as $content){
    echo ++$i.") $content\n";
}

};
