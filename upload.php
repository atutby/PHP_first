<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
if($_FILES)
{
    foreach ($_FILES["uploads"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["uploads"]["tmp_name"][$key];
            $name = $_FILES["uploads"]["name"][$key];
						move_uploaded_file($tmp_name, "./upload/$name");
						echo 'Файл загружен';
        }
    }
}


?>
<h2>Загрузка файла</h2>
<form method="post" enctype="multipart/form-data">
Выберите файл: <br>
<input type='file' name='uploads[]' /><br/>
<input type='file' name='uploads[]' /><br/>
<input type='file' name='uploads[]' /><br/>
<input type="submit" value='Загрузить' />
</form>
</body>
</html>