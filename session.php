<?php
session_start();
$_SESSION['city'] = "Сингапур";
$_SESSION['lang'] = "китайский";

if(isset($_SESSION['city']) && isset($_SESSION['lang']))
{
	$city = $_SESSION['city'];
	$language = $_SESSION['lang'];
	echo "Город: $city <br/> Язык: $language";
}
echo '<br/>';

echo session_id(); 
echo '<br/>';
echo session_name();
echo '<br/>';
// echo $_COOKIE['PHPSESSID'];

$_SESSION = array();
if(session_id() != "" || isset($_COOKIE[session_name()]))
{
	setcookie(session_name(), '', time()-2592000, '/');
}
if(true)
{
	session_destroy();
	echo "<br/>Сессия уничтожена";
}

?>