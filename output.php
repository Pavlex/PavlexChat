<?php
	if(isset($_POST["update"])){
		$db = mysql_connect("localhost","9046936062", "Pavlex","9046936062_users");
		mysql_select_db ("9046936062_users",$db);
		$query = mysql_query("SELECT users.login, message.message_text FROM  `message` ,  `users` WHERE users.id_user = message.id_user ORDER BY time_message");
		$row = mysql_fetch_array($query);
		$result = array();
		$i = 0;
		while($row=mysql_fetch_array($query))
    {
		$result[$i]["name"] = $row['login'];
		$result[$i]["message"] = $row['message_text'];
		$i++;
	}

		echo json_encode($result);
	}
?>
