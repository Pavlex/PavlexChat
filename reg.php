<?php
  $login = $_POST['login'];
  $password = $_POST['password'];
//удаление лишних пробелов
  $login=trim($login);
  $login=trim($password);
//подключение к бд
  include("bd.php");

  $result=mysql_query("INSERT INTO users (login,passwords) VALUES('$login', '$password')");
  if($result=='true')
  {
      echo("Вы зарегестрировались");
  }
  else
  echo("Идите на хуй!");
?>