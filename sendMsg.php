<?php
  $msg = $_POST['message'];
  $login = $_POST['name'];

//удаление лишних пробелов
//подключение к бд
  include("bd.php");
  $result=mysql_query("INSERT INTO message (message_text, id_user, time_message) VALUES('$msg', ".$login.", NOW())");
  echo($result);
  mysql_close($db);
?>