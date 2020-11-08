<!DOCTYPE html>
<html>
<head>
<title>Первый сайт на PHP</title>
<meta charset="utf-8">
</head>
<body>
<h2>Введи свои данные:</h2>
<form action="display.php" method="POST">
<p>Введите имя: <input type="text" name="firstname" /></p>
<p>Введите фамилию: <input type="text" name="lastname" /></p>
<input type="submit" value="Отправить">
</form>
<h2>
<?php
$os = array("Windows 7", "WindoWs 8", "Windows 10");
// natsort($os);
natcasesort($os);
print_r($os);
echo "<hr/>";

$tablets = array("(a)lenovo"=>"Lenovo IdeaTab A3500",
"(c)samsung"=>"Samsung Galaxy Tab 4",
"(b)apple"=>"Apple iPad Air");
print_r($tablets);
// asort($tablets);
// arsort($tablets);
ksort($tablets); // сортирует по ключам
// krsort($tablets, SORT_STRING);
echo "<ul>";
foreach ($tablets as $key => $value)
{
echo "<li>$key: $value</li>";
}

echo 'cat';

echo("<br/><hr/>");
$model = "Apple II";
$producer = "Apple";
$year = 1978;
$data = compact('model', 'producer', 'year');
print_r($data);
echo("<br/><hr/>");

$phones = array("apple"=>"iPhone5",
"sumsung"=>"Samsung Galaxy III",
"nokia"=>"Nokia N9",
"sony"=>"Sony XPeria Z3",
"meizu"=>"Meizu M5");
foreach($phones as $key=>$item)
{
	echo "$key => $item <br/>";
}
print_r($phones);

echo '<br/><hr/>';
shuffle($phones);
print_r($phones);
echo '<br/><hr/>';

$technics = $phones;
$isar = is_array($technics);
echo ($isar==true)?"это массив":"это не массив";
$number = count($technics);
// то же самое, что
// $number = sizeof($technics);
echo " В массиве technics $number элементов";
echo '<br/><hr/>';

$phones = array(
	"apple"=> array("iPhone5", "iPhone5s", "iPhone6"),
	"sumsung"=>array("Samsung Galaxy III", "Sumsung Galaxy ACE II",),
	"nokia"=>array("Nokia N9", "Nokia Lumia 930"),
	"sony"=>array("Sony XPeria Z3", "XPeria Z3 Dual", "XPeria T2 Ultra"));
foreach ($phones as $brand => $items)
{
	echo "<h3>$brand</h3>";
	echo "<ul>";
	foreach ($items as $key => $value)
	{
		echo "<li>$value</li>";
	}
	echo "</ul>";
}

$technics = array(
	"phones" => array("apple" => "iPhone5",
										"samsung"=>"Samsung Galaxy III",
										"nokia"=>"Nokia N9"),
	"tablets"=> array("lenovo"=>"Lenovo IdeaTab A3500",
										"samsung"=>"Samsung Galaxy Tab 4",
										"apple"=>"Apple iPad Air"));
foreach ($technics as $tovar => $items)
{
	echo "<h3>$tovar</h3>";
	echo "<ul>";
	foreach ($items as $key => $value)
	{
		echo "<li>$key : $value</li>";
	}
	echo "</ul>";
}
$technics["phones"]["nokia"] = "Nokia Lumnia 930";
echo "<h1>" . $technics["phones"]["nokia"] . "</h1>";


echo "<br/><br/><br/>";

require_once "factorial.php";
// include_once "factorial5.php";
$a = 5;
$fact = getFactorial($a);
echo "Факториал числа $a равен $fact <br/>";

function getGlobal()
{
	global $gvar;
	$gvar = 20;
	echo "$gvar ";
}
getGlobal();
echo "$gvar";


getGlobal2();
function getGlobal2()
{ 
	global $gvar;
	echo ' simpleCat ' . $gvar . " cat <br/>";
}
echo " $gvar ";




function getcounter()
{
	static $counter = 0;
	$counter++;
	echo $counter . ' ';
}
getcounter();getcounter();getcounter();

$number = 10;
get2($number);
echo "<br /> \$number равно: $number";
function get2(&$a)
{
	$a+=3;
	echo "<br /> Квадрат равен: $a";
}

get();
function get($low = 'cat', $middle=2, $highlimit=3) {
	echo "<br /><br /> $low $middle $highlimit <br>";
}

display();
function display()
{
	echo "вызов функции display()" . '<br><br>' ;
}

define("NUMBER", 22);
echo NUMBER . "<br>";
$num = NUMBER;
echo $num . '<br>';
echo __file__ . '<br>';
echo __line__ . '<br>';
// echo __dir__ . '<br>';
// echo __FUNCTION__ . '<br>';
// echo __CLASS__ . '<br>';
// echo __METHOD__ . '<br>';
echo __NAMESPACE__ . '<br>';
echo "Cтрока " . __LINE__ . " в файле " . __FILE__ . '<br>';
if (defined('NUMBER')) {
	echo 'define const' . '<br>';
	}

if (defined('NUMBER')) {
	echo 'define boole define(string NUMBER)' . '<br>';
}

$a = 10.7;
settype($a, "bool");
echo $a . '<br>';

$a = 5;
$b = 2;
if($a<0)
{
	echo $a * $b;
}
elseif($a==0)
{
	echo $a + $b;
}
elseif($a==5)
{
	echo $a - $b;
}
elseif($a > $b)
{
	echo $a / $b;
}
else
{
	$result = $a * $b;
	echo "результат равен: $result <br>";
}

switch($a)
{
	case 1:
		echo "сложение";
		break;
	case 2:
		echo "вычитание";
		break;
	default:
		echo "<br>действие по умолчанию<br>";
		break;
}

echo '$a = ' . $a . '<br> $b = ' . $b . '<br>';
$z = $a < $b ? $a + $b : $a - $b;
echo $z . '<br>';


echo "Конец выполнения программы";

?>
</h2>
</body>
</html>