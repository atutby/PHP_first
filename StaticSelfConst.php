<?php
class User
{
	static $counter = 0;

	function __construct()
	{
		self::$counter++;
		$this->id=self::$counter;
	}

	static function getCounter()
	{
		return self::$counter;
	}
	function getId()
	{
		return $this->id;
	}
}

$user1 = new User;
echo "Id первого пользователя: " . $user1->getId() . "<br/>";
$user2 = new User;
echo "Id второго пользователя: " . $user2->getId() . "<br/>";
echo "Всего пользователей: " . User::getCounter();
echo "<hr/>";
?>