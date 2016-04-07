<?php
	session_start();
	
class create{
		public $name;
		public $address;
		public $phone;
		public $number;
		public $type;
		public $balance;
	
	
	function createaccount($n, $a, $p, $num, $t, $bal){
			echo "<h3>Thank you for creating account in our bank</h3><br>";
			echo "<h4>Your details are:- <br></h4>";
			echo "<strong>Name: </strong>" .$this->name = $n . "<br>";
			echo "<strong>Address: </strong>" .$this->address = $a . "<br>";
			echo "<strong>Phone: </strong>" .$this->phone = $p . "<br>";
			echo "<strong>Account Number: </strong>" .$this->number = $num . "<br>";
			echo "<strong>Account Type: </strong>" .$this->type = $t . "<br>";
			echo "<strong>Balance: </strong>" .$this->balance = $bal . "<br>";
			
			echo "<h2 style='color:Blue'><a href='../index.php'>GO BACK</a></h2>";
			
			$_SESSION['name']=$this->name;
			$_SESSION['address'] = $this->address;
			$_SESSION['phone']=$this->phone;
			$_SESSION['number'] = $this->number;
			$_SESSION['type'] = $this->type;
			$_SESSION['balance']=$this->balance;
			
		}
}

$createacc = new create();
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$accnumber = $_POST['accnumber'];
	
	if (!empty($_POST['acctype'])){
		if ($_POST['acctype']=="cheque"){
			$acctype = "cheque";
		}
		else{
			$acctype = "savings";
			}
		}
		
	$acccbalance = $_POST['accbalance'];


$createacc->createaccount($name, $address, $phone, $accnumber, $acctype, $acccbalance);
?>