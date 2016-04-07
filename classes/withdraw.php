<?php
	session_start();
	
class withdraw{
		public $balance;
		
		
	function withdrawamount($withdraw){
			if($_SESSION['balance'] == ''){
				echo "Please create account first";	
				}
			else{
				$this->balance = $_SESSION['balance'];
				if($withdraw > $this->balance){
						echo "Sorry! The overdraft facility is not available";
					}
				else{
						$accountnumber = $_SESSION['number'];
						echo "<b>Old balance: </b> " .$this->balance . "<br>";
						echo "<b>Amount withdrawn: </b>" .$withdraw."<br>";
						echo "<b>Account number: </b>" .$accountnumber . "<br>";
						$this->balance = $this->balance - $withdraw;
						$_SESSION['balance']=$this->balance;
						echo "<b>Remaining balance ".$this->balance. "<br>";
					}	
				}
				echo "<h2 style='color:Blue'><a href='../index.php'>GO BACK</a></h2>";
				
				
		}
}

$wit = new withdraw();
	
	$withdraw = $_POST['withdrawamt'];
$wit->withdrawamount($withdraw);
?>