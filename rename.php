<?php
// if (!rename("hello.txt", "subdir/hello.txt"))
// 	echo "Ошибка премещения файла";
// else echo "Файл перемещён";

// if (copy("hello.txt", "hello_copy.txt"))
// 	echo "Копия файла создана";
// else echo "Ошибка копирования файла";

// if (unlink("hello_copy.txt"))
// 	echo "Файл удалён";
// else echo "Ошибка при удалении файла";

// if (mkdir("newdir"))
// 	echo "Каталог создан";
// else
// 	echo "Ошибка при создании каталога";

// if(rmdir("newdir"))
// 	echo "Каталог удалён";
// else
// 	echo "Ошибка при удалении каталога";

$path = getcwd();
echo $path . '<br/>'; // C:\localhost

$dir = getcwd();
if(is_dir($dir))
{
	if ($dh = opendir($dir))
	{
		while (($file = readdir($dh)) !== false)
		{
			if($file=='.' || $file=='..') continue;
			if(is_dir($file)) echo "каталог: $file <br/>";
			else echo "файл:	$file <br/>";
		}
		closedir($dh);
	}
}
?>	