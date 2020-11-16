<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	$mysql = new mysqli('localhost', 'root', 'root', 'magazin');

	$result = $mysql->query("SELECT * FROM `utilizatori` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	if(count($user) == 0){
		echo "Aşa utilizator nu există";
		exit();
	}
	setcookie('user', $user['name'], time()+3600, "/");
	$mysql->close();
?>