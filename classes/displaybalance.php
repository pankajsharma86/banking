<?php
	session_start();
	
class displaybal{
		public $balance;
		
		
	function displaybalance(){
			if($_SESSION['balance'] == ''){
				echo "Please create account first";	
				}
			else{
				$this->balance = $_SESSION['balance'];
				echo "<h3>Your Current Balance is : $".$this->balance."</h3>";	
				}
				echo "<h2 style='color:Blue'><a href='../index.php'>GO BACK</a></h2>";
		}
}

$dis = new displaybal();
$dis->displaybalance();
?>