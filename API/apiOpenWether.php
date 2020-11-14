<?php
//apiOpenWether.php
echo '<br>======================================================================<br>';
echo '<b>Пример №# - apiOpenWether.php</b>  api.openweathermap.org <br>';
echo '('.__FILE__.')'.'<br>';
// By city name
// Description:
// You can call by city name or city name, state and country code.
// API responds with a list of results that match a searching word.
// API call:

// api.openweathermap.org/data/2.5/weather?q={city name}&appid={your api key}

// api.openweathermap.org/data/2.5/weather?q={city name},{state}&appid={your api key}

// api.openweathermap.org/data/2.5/weather?q={city name},{state},{country code}&appid={your api key}
// Parameters:

// q city name, state and country code divided by comma,
// use ISO 3166 country codes. You can specify the parameter not only in English.
// In this case, the API response should be returned in the same language
// as the language of requested location name if the location is in our
// predefined list of more than 200,000 locations.


//-------------------------------------------------------------------------------------------------------
// https://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=71499ec8343d18bea5ff54dc06c215f3

//   {
//     "id"=>698740,
//     "name": "Odessa",
//     "state": "",
//     "country": "UA",
//     "coord": {
//       "lon": 30.732622,
//       "lat": 46.477474
//     }

$url='https://api.openweathermap.org/data/2.5/weather';

$options=[
    'q'=>'Odessa',
    'country'=>'ua',
    'APPID'=>'71499ec8343d18bea5ff54dc06c215f3',
    'units'=>'metric',
    'lang'=>'en',
];
echo '<br>GET '.http_build_query($options).'<br>';

//curl_init — Инициализирует сеанс cURL
$ch=curl_init();
//curl_setopt — Устанавливает параметр для сеанса CURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));
//curl_exec — Выполняет запрос cURL
$response=curl_exec($ch);
//json_decode — Декодирует строку JSON. Принимает закодированную в JSON строку и преобразует ее в переменную PHP. 
$data=json_decode($response, true);
        // $temp_now=$data->main->temp."°C";
        $temp_now=$data['main']['temp']."°C";
//curl_close — Завершает сеанс cURL
curl_close($ch);

echo '<br><pre>';
debug($response);
echo '<br>';
print_r($data);
echo '</pre>';

echo '<br><pre>';
print_r($temp_now);
echo '</pre>';

// $arr=explode('&',http_build_query($options));
// debug($arr);





//-------------https://pogrommist.ru/2018/11/openweathermap-poluchaem-prognoz-pogody-po-api/

// <?

// $url = "https://api.openweathermap.org/data/2.5/weather?id=498817&units=metric&appid=YOUR_API_KEY&lang=ru";

// $contents = file_get_contents($url);
// $weather=json_decode($contents);

// $temp_now=$weather->main->temp."°C";
// $icon=$weather->weather[0]->icon.".png";
// $today = date("j.m.Y, H:i");
// $cityname = $weather->name;

// echo $today."<br />".
// $cityname."<br />".
// $temp_now."<br />
// <img src='./icons/" . $icon ."' class='condition'/>";

