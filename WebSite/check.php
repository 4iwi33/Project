<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check</title>
</head>

<body>
    <?php
    $email = $_POST['email']; // print_r($_POST);
    $message = $_POST['message'];
    $error = ''; // выводит "Enter your Email" если его не ввели
    if (trim($email) == '') //trim — Удаляет пробелы (или другие символы) из начала и конца строки
        $error = 'Enter your Email !';
    else if (trim($message) == '')
        $error = 'Enter your message'; //выводит "Enter your message" если его не ввели
    else if (strlen($message) < 10) // "strlen" - функиция считает количество символов в стоке.
        $error = 'Сообщение должно быть более 10 символов'; // выводит "Сообщение должно быть более 10 символов" если ввели меньше
    if ($error != '') {
        echo $error;
        exit;  // "exit" — Вывести сообщение и прекратить выполнение текущего скрипта
    }
    $subject = "=?utf-8?B?" . base64_encode("Testing message") . "?=";    // "base64_encode" - кодирует данные способом MIME base64.// "$subject" - переменая которая содержит название письма
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    mail('4iwi33@mail.ru', $subject, $headers);    // "mail" - функця для отправки сообщения
    header('Location: /about.php');
    ?>
</body>

</html>