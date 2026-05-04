<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["ФИО"];
    $company = $_POST["Компания"];
    $email = $_POST["Email"];
    $phone = $_POST["Телефон"];

    $to = "whale-coms@yandex.ru";
    $subject = "Новая заявка с сайта";

    $message = "
    ФИО: $name
    Компания: $company
    Email: $email
    Телефон: $phone
    ";

    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: index.html");
    echo "Форма отправлена";
    print_r($_POST);
    exit();
}
?>