<?php
class User
{
	public $name, $age;

	function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	function getClassInfo()
	{
		echo "Класс User описывает пользователей<br />";
	}
	function getInfo()
	{
		echo "Имя: $this->name ; Возраст: $this->age <br/>";
	}
}
class Customer extends User
{
	public $account, $sum;

	function __construct($name, $age, $acc)
	{
		// вызов конструктора базового класса
		parent::__construct($name, $age);
		echo 'Ura! I\'m Sasha <br/>';
		$this->account=$acc;
		$this->sum=20;
	}

	// скрывает родительский метод getClassInfo()
	function getClassInfo()
	{
		echo "Класс Customer описывает клиетов <br/>";
	}

	function getInfo()
	{
		parent::getInfo();
		echo "Номер счёта $this->account ; Сумма: $this->sum <br/>";
	}
}

$client = new Customer("Джон", 25, "1123400895");
$client->getInfo();
$client->getClassInfo();
?>