<?php
$fd = fopen("hello.txt", "r+") or die("Ошибка открытия файла	");
$str = " Hello World!";

global $i;
$i = 2;
if(flock($fd, LOCK_EX))
{
	$i = $i + 1;
	fseek($fd, 0, SEEK_END); // переход в конец файла
	fwrite($fd, "$str . ++$i") or die("Ошибка записи");
	flock($fd, LOCK_UN);
}
fclose($fd);

// $fd = fopen("hello.txt", "r+") or die("Ошибка открытия файла	");
// if (flock($fd, LOCK_EX))
// {
// 	ftruncate($fd, 0);
// 	fwrite($fd, "$str") or die("Ошибка записи");
// 	flock($fd, LOCK_UN);
// }
// fclose($fd);
?>