<?php 
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

		if(mb_strlen($login) < 4 || mb_strlen($login) > 90) {
		echo "LUNGIME NEDISPONIBILĂ";
		exit();
	} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
		echo "LUNGIME NEDISPONIBILĂ";
		exit(); 
	} elseif (mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
		echo "LUNGIME NEDISPONIBILĂ (de la 2 la 6 caractere)";
		exit();
	}
$mysql = new mysqli('localhost', 'root', 'root', 'magazin');
	$mysql->query("INSERT INTO `utilizatori` (`login`, `name`, `pass`) VALUES('$login', '$name', $pass)");

	$mysql->close();

	header('Location: /log.php');
?>