<?php
	require_once 'connection.php'; // подключаем скрипт

	// // подключаемся к серверу
	// $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link) . "<br/>");

	// // выполнение операций с базой данных
	// // 1
	// $query = "SELECT * FROM phones";
	// $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link) . "<br/>");
	// if($result)
	// {
	// 	echo "Выполнение запроса прошло успешно <br/>";
	// }

	// 2
	// // создадим таблицу
	// $query2 = "CREATE Table tovars
	// (
	// 	id INt NOT NULL AUTO_INCREMENT PRIMARY KEY,
	// 	name VARCHAR(200) NOT NULL,
	// 	company VARCHAR(200) NOT NULL
	// )";
	// $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link) . "<br/>");
	// if($result2)
	// {
	// 	echo "Создание таблицы прошло успешно <br/>";
	// }
	// // удалим таблицу
	// $query2 = "DROP TABLE tovars";
	// $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link) . "<br/>");
	// if($result2)
	// {
	// 	echo "Удаление таблицы прошло успешно";
	// }

	if(isset($_POST['name']) && isset($_POST['company']))
	{
		// подключаемся к серверу
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

		// экранирование символов для mysql
		$name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
		$company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));

		// создание строки запроса
		$query = "INSERT INTO tovars VALUES(NULL, '$name', '$company')";

		// выполняем запрос
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		if($result)
		{
			echo "<span style='color:blue;'>Данные добавлены</span>";
		}

		// закрываем подключение
		mysqli_close($link);

	}
	?>