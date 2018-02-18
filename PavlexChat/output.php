<?
		include("bd.php");
		
		$result=mysql_query('SELECT * FROM `message`'); // запрос на выборку
		while($row=mysql_fetch_array($result))
		{
			$row1 = mysql_fetch_array(mysql_query('SELECT login FROM `users` where id_user='.$row['id_user']));
			$str[] = $row1['login'].'. '.$row['message_text'];// выводим данные
		}
		require_once('chat.html');
?>
