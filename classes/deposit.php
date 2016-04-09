<?php
	session_start();
	
class deposit{
		public $balance;
		public $newbalance;
		
	function depositamount($deposit){
			if($_SESSION['balance'] == ''){
				echo "Please create account first";	
				}
			else{
				$this->balance = $_SESSION['balance'];
				echo "Your old balance was: " . $this->balance . "<br>";
				$this->newbalance = $this->balance + $deposit;
				echo "You have deposited " . $deposit . " in the bank <br>";
				$_SESSION['balance'] = $this->newbalance;
				echo "Yor new balance is " . $this->newbalance . "<br>";
		
				}
			echo "<h2 style='color:Blue'><a href='../index.php'>GO BACK</a></h2>";
		}
}

$dep = new deposit();
	
	$deposit = $_POST['depositamt'];
$dep->depositamount($deposit);
?>