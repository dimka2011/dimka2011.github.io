<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);
$name = urldecode($name);
$email = urldecode($email);
$text = urldecode($text);
$name = trim($name);
$email = trim($email);
$text = trim($text);
//echo $name;
//echo "<br>";
//echo $email;
if (mail("roditel.dfv@mail.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email ,"Анекдот:".$text"From: info@dimka2011.github.io \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";

}?>