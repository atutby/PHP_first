<h2>Анкета</h2>
<form action="input.php" method="POST">

	<label for="firstname">Введите имя:</label>
	<input type="text" name="firstname" id="firstname" required>
	<div>Форма оучения: <br>
		<label for="day">Очно</label>
		<input type="radio" name="eduform" id="day" value="очно"><br>
		<label for="night">Заочно</label>
		<input type="radio" name="eduform" id="night" value="заочно"><br>
	</div>
	<div><label for="hostel">Требуется общежитие:</label>  
		<input type="checkbox" name="hostel" id="hostel">
	</div>
	<div>Выберите курсы: <br>
		<select name="courses[]" size="5" multiple id="courses">
			<option value="ASP.NET" selected>ASP.NET</option>
			<option value="PHP" selected>PHP</option>
			<option value="Ruby">Ruby</option>
			<option value="Python">Python</option>
			<option value="Java">Java</option>
		</select>
	</div>
	<div>
		<label for="comment">Краткий комментарий:</label>	 <br>
		<textarea name="comment" id="comment" cols="30" rows="10"></textarea>
	</div>
	<input type="submit" value="Выбрать">

</form>

<?php
if(isset($_POST['firstname']) && isset($_POST['eduform']) && 
    isset($_POST['comment']) && isset($_POST['courses'])) 
{
    $name = htmlentities($_POST['firstname']);
    $eduform = htmlentities($_POST['eduform']);
    $hostel = "нет";
    if(isset($_POST['hostel'])) $hostel = "да";
    $comment = htmlentities($_POST['comment']);
    $courses = $_POST['courses'];
    $output ="
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    Вас зовут: $name<br />
    Форма обучения: $eduform<br />
    Требуется общежитие: $hostel<br />
    Выбранные курсы:
    <ul>";
    foreach($courses as $item)
        $output.="<li>" . htmlentities($item) . "</li>";
    $output.="</ul><p>$comment</p></body></html>";
    echo $output;
}
else
{   
    echo "Введенные данные некорректны <br><br>";
}

print_r($_POST);
?>

