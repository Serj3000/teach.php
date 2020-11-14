<?php

echo '<br>======================================================================<br>';
echo '<b>Пример №# - curl.php</b> Функция client URL (cURL)<br>';
echo '('.__FILE__.')'.'<br>';

// Создание нового ресурса cURL. Инициализирует сеанс cURL
$ch = curl_init();

// Установка URL и других необходимых параметров
curl_setopt($ch, CURLOPT_URL, "http://rectors.odessa.ua");
curl_setopt($ch, CURLOPT_HEADER, 0);


// Загрузка страницы и выдача её браузеру
//curl_exec($ch);


if (!curl_errno($ch)) {
$watch=curl_getinfo($ch);
echo 'Прошло ', $watch['total_time'], ' секунд во время запроса к ', $watch['url'], "\n";
};

// Завершение сеанса и освобождение ресурсов
curl_close($ch);


echo '<br><pre>';
foreach($watch as $key=>$valu){
    echo '<br>';
        print_r($valu);
}
