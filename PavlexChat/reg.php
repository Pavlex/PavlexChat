<?php
  $login = $_POST['login'];
  $password = $_POST['password'];
//удаление лишних пробелов
  $login = stripslashes($login);
  $login = htmlspecialchars($login);
  $password = stripslashes($password);
  $password = htmlspecialchars($password);
  $login=trim($login);
  $password=trim($password);
//подключение к бд
  include("bd.php");
  $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
  $result=mysql_query("INSERT INTO users (login ,password) VALUES('$login', '$password')");
  echo $result."<br>";
  if($result==true)
  {
      echo("Вы зарегестрировались");
  }
  else
  echo("Идите на хуй!");
  mysql_close($db);
?>