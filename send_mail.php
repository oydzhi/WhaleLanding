<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$to = "whale-coms@yandex.ru";
$subject = "Новая заявка с сайта";

$name = isset($_POST['name']) ? $_POST['name'] : '';
$position = isset($_POST['position']) ? $_POST['position'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';

$message = "ФИО: $name\nДолжность: $position\nEmail: $email\nТелефон: $phone";

$headers = "From: no-reply@softwhale.ru\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $message, $headers)) {
    header("Location: /?success=1");
    exit();
} else {
    echo "Ошибка отправки";
}
?>