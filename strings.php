<?php
$input = 'This is the end';
$search = 'is';
$position = mb_strrpos($input, $search);
if($position!==false)
{
	echo "Позиция подстроки '$search' в строке '$input': $position <br>";
}

$input = 'Мама мыла раму';
$search = 'мы';
$position = mb_strpos($input, $search);
if($position!==false)
{
	echo "Позиция подстроки '$search' в строке '$input': $position <br>";
}

$input = '	Мама мыла раму	 cat<br>	';
print_r($input);
echo $input;
echo trim($input);

echo mb_strtolower($input);
echo mb_strtoupper($input);
echo mb_strlen($input) . '<br/>';
echo mb_substr($input, 2);
echo mb_substr($input, 5, 3) . '<br/>';
echo str_replace("мы", "ши", $input);
echo $input;
?>