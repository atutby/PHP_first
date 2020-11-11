<?php
$value1 = "Сингапур";
$value2 = "китайский";
setcookie("city", $value1);
setcookie("language", $value2, time()+3600);

if(isset($_COOKIE['city'])) echo "Город: " . $_COOKIE["city"] . "<br>";
if(isset($_COOKIE['language'])) echo "Язык: " . $_COOKIE["language"] . "<br>";

setcookie("lan[1]", "PHP");
setcookie("lan[2]", "C#");
setcookie("lan[3]", "Java");

if( isset($_COOKIE['lan'])) {
	foreach ($_COOKIE['lan'] as $name => $value) {
		$name = htmlspecialchars($name);
		$value = htmlspecialchars($value);
		echo "$name. $value <br />";
	}
}


echo 'cat';

?>