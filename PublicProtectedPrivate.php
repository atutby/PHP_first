<?php
/**
 *  создать многострочный комментарий (слеш две звёздочки и Enter)
 */
class User
{
	private $privateA = "private";
	public $publicA = "public=====================================";
	protected $protectedA = "protected";

	private function getPrivateMethod()
	{
		echo "private method <br/>";
		echo "$this->privateA <br/>";
		echo "$this->protectedA <br/>";
		echo "$this->publicA <br/>";
	}

	protected function getProtectedMethod()
	{
		echo "protected method <br/>";
	}

	public function getPublicMethod()
	{
		echo "public method <br/>";
		$this->getPrivateMethod();
	}
}

class Customer extends User
{
	public function getCustomerMethod()
	{
		// echo $this->privatA; // нельзя, так как privateA - private в классе-родителе
		echo $this->protectedA;
		echo $this->publicA;
		//$this->getPrivateMethod(); // нельзя, так как private в классе-родителе
		$this->getProtectedMethod();
		$this->getPublicMethod();
	}
}

$user = new User;
$user->getPublicMethod();
echo $user->publicA;
echo "<hr/>";

$customer = new Customer;
$customer->getPublicMethod();
echo $customer->publicA;
?>