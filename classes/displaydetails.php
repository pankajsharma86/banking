<?php
	session_start();
	
class displayalldetails{
		public $name;
		public $address;
		public $phone;
		public $number;
		public $type;
		public $balance;
		
		
	function displaydetails(){
		if($_SESSION['balance'] == ''){
				echo "Please create account first";	
				}
		else{
			echo "<h4>Your details are:- <br></h4>";
			echo "<strong>Name: </strong>" .$_SESSION['name'] . "<br>";
			echo "<strong>Address: </strong>" .$_SESSION['address']. "<br>";
			echo "<strong>Phone: </strong>" .$_SESSION['phone']. "<br>";
			echo "<strong>Account Number: </strong>" .$_SESSION['number'] . "<br>";
			echo "<strong>Account Type: </strong>" .$_SESSION['type'] . "<br>";
			echo "<strong>Balance: </strong>" .$_SESSION['balance']. "<br>";
		}
		echo "<h2 style='color:Blue'><a href='../index.php'>GO BACK</a></h2>";
	}
}
$dis = new displayalldetails();
$dis->displaydetails();
?>