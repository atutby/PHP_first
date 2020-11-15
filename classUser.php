<?php
class User
{
    public $name, $age;
		 
		function __construct($name="Sasha", $age=34)
    {
        $this->name = $name;
        $this->age = $age;
		}
		
    function getInfo()
    {
        echo "Имя: $this->name ; Возраст: $this->age <br>";
		}

		function __destruct()
    {
        echo "<br> Вызов деструктора";
    }
}
$user = new User;
$user->getInfo(); // вызов метода getInfo()
print_r($user);
?>