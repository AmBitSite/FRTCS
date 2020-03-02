<?php
//// ФАЙЛ ДЛЯ РАССЫЛКИ
////Получаем данные из формы

$name = $_POST['name']; // поле с Заговоком
$email = $_POST['email']; // поле с Текстом сообщения

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo 'email is not valid ';
};
$title = 'First Trust and Consulting services - Site Message ';
$message = "Name: $name \n\r
            Email: $email ";

mail('info@ftcs.com', $title, $message);

header("Location: /index.html");
exit();