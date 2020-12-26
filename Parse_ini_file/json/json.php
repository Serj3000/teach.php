<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - json.php </b>  <br>';
echo '('.__FILE__.')'.'<br>';

$file_json='Parse_ini_file\json\data.json';

//загружаем данные в строковую переменную
$buffer=file_get_contents($file_json);

//-----------------------------------------
//преобразовываем json-строку в объект
echo '<br>1) Преобразовываем json-строку в обект: <i>json_decode($buffer, false)</i>';
$data_object=json_decode($buffer, false);
    echo '<br> <b>$data_object=</b> ';
    print_r($data_object);
//преобразовываем json-строку в массив
echo '<br>2) Преобразовываем json-строку в массив: <i>json_decode($buffer, true)</i>';
$data_array=json_decode($buffer, true);
    echo '<br> <b>$data_array=</b> ';
    print_r($data_array);
//-----------------------------------------

//добавим номер телефона
$obj_json=$data_object->phoneNumber[8].='888-88-88';

echo '<br> $data_object->phoneNumber= ';
print_r($obj_json);

$data_array['phoneNumber'][9]='777-77-77';

// for($i=0;$i<count($data_array);$i++){
//     $data_array['phoneNumber'][$i].=$i.'ffff';
//     echo '<br>'.$data_array['phoneNumber'][$i];
// }

echo '<br> $data_array[phoneNumber]= ';
print_r($arr_json);

//запись данных в json файл
// преобразование объекта в json-строку
$object_json=json_encode($data_object);
file_put_contents('Parse_ini_file\json\object.json', $object_json);

// преобразование массив в json-строку
$object_array=json_encode($data_array);
file_put_contents('Parse_ini_file\json\array.json', $object_array);
