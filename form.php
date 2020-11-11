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
	$login=($_POST['login']);
	$password=($_POST['password']);
	echo "Ваш логин: $login <br/> Ваш пароль: $password <br/>";

	// if(isset($_POST['remember']))
	// {
	// 	$remember = $_POST['remember'];
	// 	echo "$remember <br/>";
	// }

}

if(isset($_POST['technologies']))
{
	$technologies = $_POST['technologies'];
	foreach($technologies as $item) echo "$item<br/>";
}

if(isset($_POST['course']))
{
	$course = $_POST['course'];
	echo $course . '<br>';
}

if(isset($_POST['courses']))
{
	$courses = $_POST['courses'];
	foreach($courses as $item) echo "$item<br>";
}

?>
	<h3>Вход на сайт</h3>
	<form method="POST">
		Логин: <input type="text" name="login"/><br>
		Пароль: <input type="text" name="password" /><br><br>

		ASP.NET: <input type="checkbox" name="technologies[]" value="ASP.NET" checked/><br>
		PHP: <input type="checkbox" name="technologies[]" value="PHP"/><br>
		RUBY: <input type="checkbox" name="technologies[]" value="RUBY"/><br>
		SANHOL: <input type="checkbox" name="technologies[]" value="SANHOL"/><br><br>

		<input type="radio" name="course" value="ASP.NET"/>ASP.NET <br>
		<input type="radio" name="course" value="PHP"/>PHP <br>
		<input type="radio" name="course" value="RUBY"/>RUBY <br><br>


		<select name="courses[]" size="4" multiple="multiple">
			<option value="ASP.NET">ASP.NET</option>
			<option value="PHP">PHP</option>
			<option value="Ruby">Ruby</option>
			<option value="Python">Python</option>
		</select>
		<input type="submit" value="Войти"/>
	</form>
</body>
</html>