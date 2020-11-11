<?php

$fd = fopen("form.php", 'r') or die("не удалось открыть файл");
echo '$fd = fopen("form.php", "r") or die("не удалось открыть файл"); <br/>';
fclose($fd);
echo 'fclose($fd);  <br/>';

// $fd = fopen("form.php", "r") or die("не удалось открыть файл");
// while(!feof($fd))
// {
// 	$str = htmlentities(fgets($fd));
// 	echo $str . '<br/>';
// }
// fclose($fd);

// $str = htmlentities(file_get_contents("form.php"));
// echo $str;

// $fd = fopen("form.php", "r") or die("не удалось открыть файл");
// while(!feof($fd))
// {
// 	$str = htmlentities(fread($fd, 600));
// 	echo $str . '<br/><br/>';
// }
// fclose($fd);

// $fd = fopen("hello.txt", 'w') or die("не удалось создать файл");
// $str = "Привет мир2";
// // fwrite($fd, $str);
// fputs($fd, $str);
// fclose($fd);

$fd = fopen("hello.txt", 'w+') or die("не удалось открыть файл");
$str = "Привет Мир!";
fwrite($fd, $str);
fseek($fd, 0);
fwrite($fd, "Хрю");
fseek($fd, 0, SEEK_END);
fwrite($fd, " Привет Мир2!");
fclose($fd);
?>