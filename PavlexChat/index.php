<?php
    session_start();
    if(empty(($_SESSION[id])))
    {
        header('Location: index.html');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body >
	<form action="output.php"></form><div style="padding-left: 20%; padding-right: 20%">
	<div style="display: block; background-color: lightgray; text-align: center;">
				<?php foreach ($str as $str1) { ?>
                    <?php echo $str1; ?><br>
                <?php } ?>
	<form action="sendMsg.php" method="post">
        <div style="display: flex;"">
        <input type="hidden" name="login" value="<?php echo $_SESSION['login']?>">
        <input style="width:85%" type="text" name="msg" placeholder="Введите сообщение">
        <input style="width:15%" type="submit" value="Отправить" id="btnSendMsg">
        </div>
    </form>
	</div>
	
</body>
</html>