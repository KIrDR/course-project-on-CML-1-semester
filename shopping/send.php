<?php
// Файлы phpmailer
require '../k-store/static/phpmailer/phpmailer/PHPMailer.php';
require '../k-store/static/phpmailer/phpmailer/SMTP.php';
require '../k-store/static/phpmailer/phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$message = $_POST['msg'];
$email = $_POST['email'];


// Формирование самого письма
$title = "Новое обращение - k-store.by";
$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br>
<b>Email:</b><br>$email<br>
<b>Комментарий:</b><br>$comment<br>
<b>Список техники:</b><br>$message<br>
";


$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};


    $mail->Host       = 'smtp.mail.ru';
    $mail->Username   = 'kartoshkastore338@mail.ru';
    $mail->Password   = 'J1vv8cpde7NVNheqkf1t';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('kartoshkastore338@mail.ru');

    $mail->addAddress('kartoshkastore338@mail.ru');
   

    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
header('Location: index.php');