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
    ?>
</body>

</html>