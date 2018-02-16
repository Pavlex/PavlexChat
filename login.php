<?php
    session_start();
    $login=$_POST['login'];
    $password = $_POST['password'];

    //удаление лишних пробелов
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login=trim($login);
    $password=trim($password);

    include("bd.php");

    $result = mysql_query("SELECT * FROM users WHERE login='$login'");
    $userMas = mysql_fetch_array($result);
    if(empty($userMas['password']))
    {
        header('Location: index.html'); exit;
    }
    else{
        if($userMas['password'] == $password){
            $_SESSION['login'] = $userMas['login'];
            $_SESSION['id'] = $userMas['id'];
            require_once('output.php');
            //header('Location: output.php'); exit;
        }
        else{
            header('Location: index.html'); exit;
        }
    }
?>