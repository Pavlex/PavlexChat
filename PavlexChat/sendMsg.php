<?php
  $msg = $_POST['msg'];
  $login = $_POST['login'];
  echo "SELECT id_user FROM `users` where login='$login'"."<br>";
  
//удаление лишних пробелов
//подключение к бд
  include("bd.php");
  $row1 = mysql_fetch_array(mysql_query("SELECT id_user FROM `users` where login='$login'"));
  echo "INSERT INTO message (message_text, id_user) VALUES('$msg', ".$row1['id_user'].")"."<br>";
  $result=mysql_query("INSERT INTO message (message_text, id_user) VALUES('$msg', ".$row1['id_user'].")");
  mysql_close($db);
  header('Location: output.php');
?>