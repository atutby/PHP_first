<?php
$login = 'не определён';
$age = 'не определён';

if(isset($_GET['login']))
{
	$login = $_GET['login'];
}
if(isset($_GET['age']))
{
	$age = $_GET['age'];
}
echo "Ваш логин: $login <br> Ваш возраст: $age";

?>

<form action="" method="GET">
Логин: <input type="text" name="login"/><br><br>
Логин: <input type="text" name="age"/><br><br>
<input type="submit" value="Отправить">
</form>
