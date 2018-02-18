<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
mail("pavlex57@gmail.com", "С сайта", "От:".$fio.". E-mail: ".$email ,"From: pavlex57@gmail.com \r\n");
?>
