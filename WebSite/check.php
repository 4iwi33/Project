<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check</title>
</head>

<body>
    <?php
    // print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = ''; //сюда запсываем ошибки
    if (trim($email) == '') //trim — Удаляет пробелы (или другие символы) из начала и конца строки
        $error = 'Enter your Email !';
    else if (trim($message) == '')
        $error = 'Enter your message';

    else if (strlen($message) < 10) // "strlen" - функиция считает количество символов в стоке.
        $error = 'Сообщение должно быть более 10 символов';
    if ($error != '') {
        echo $error;
        exit;  // "exit" — Вывести сообщение и прекратить выполнение текущего скрипта
    }

    // "mail" - функця для отправки сообщения

    // "$subject" - переменая которая содержит название письма
    // "base64_encode" - кодирует данные способом MIME base64.
    $subject = "=?utf-8?B?" . base64_encode("Testing message") . "?=";
    // "$headers" - переменая содержит заголовки 
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";


    mail('4iwi33@mail.ru', $subject, $headers);
    ?>
</body>

</html>