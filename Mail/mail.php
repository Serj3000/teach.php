<?php

echo '('.__FILE__.')'.'<br>';

// mail() — Отправляет электронную почту

//1-------------------------------------------------
// // Сообщение
// $message = "Line 1\r\nLine 2\r\nLine 3";
// // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
// $message = wordwrap($message, 70, "\r\n");
// // Отправляем
// mail('forjobon@ukr.net', 'My Subject', $message);

//2-------------------------------------------------
// $to      = 'forjobon@ukr.net';
// $subject = 'the subject';
// $message = $_POST['text'];
// $headers = array(
//     'From' => 'webmaster@example.com',
//     'Reply-To' => 'forjobon@ukr.net',
//     'X-Mailer' => 'PHP/' . phpversion()
// );

// mail($to, $subject, $message, $headers);


// imap_mail() — Отправить email
// imap_mail($to, $subject, $message, $headers);

//3---------------------------------------------------

// $to = "User <forjobon@ukr.net>";
$to = "forjobon@ukr.net";

$subject = "Тема письма (14.12.2020)";
// Для корректной отправки на mail.ru необходимо, дополнительно, для темы добавить следующую строку
// $subject = "=?utf-8?B?".base64_encode($subject)."?=";

$message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';
// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");

// $headers = "Content-type: text/plain; charset=windows-1251 \r\n";
// $headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: От кого письмо <from@example.com>\r\n"; 
$headers .= "Reply-To: Ответить на <m@example.com>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();;


$send = mail($to, $subject, $message, $headers);
if ($send){
echo 'Письма отправлены на email '. $GLOBALS["to"];
echo '<br>';
};
echo '<br>';
print_r($_REQUEST);
echo '<br><pre>';
print_r($_SERVER);
echo '<br></pre>';
echo '<br>$_COOKIE ';
print_r($_COOKIE);
