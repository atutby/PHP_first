<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
if(isset($_POST['login']) && isset($_POST['password'])){
	// $login=htmlentities($_POST['login']);
	// $password=htmlentities($_POST['password']);
	$login=strip_tags($_POST['login']);
	$password=strip_tags($_POST['password']);
	echo "Ваш логин: $login <br> Ваш пароль: $password";
}
?>
	<h3>Вход на сайт</h3>
	<form method="POST">
		Логин: <input type="text" name="login"/><br><br>
		Пароль: <input type="text" name="password" /><br><br>
		<input type="submit" value="Войти"/>
	</form>
</body>
</html>