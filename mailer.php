<?php
$name = $_POST['name'];
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){echo 'email is not valid ';};
$title = 'First Trust and Consulting services - Site Message ';
$message = "Name: $name \n\r
            Email: $email ";
mail('info@firsttacs.com', $title, $message);
header("Location: /index.html");
exit();