<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>connectionMain.php</title>
</head>
<body>
<div>

</div>

<h2 style="font-size: 2em;">Добавить новую модель телефона</h2>
<form method="POSt" style="font-size: 2em;" action="./connectionMain_data.php">
	<p>Введите модель: <br/>
	<input type="text" name="name" /></p>
	<p>Производитель: <br/>
	<input type="text" name="company" /></p>
	<input id="submit" type="submit" value="Добавить">
</form>

<!-- <script>
	document.getElementById("submit").addEventListener("click", function(event){
  event.preventDefault()
})
</script> -->
	
</body>
</html>

