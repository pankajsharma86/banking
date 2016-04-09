<?php
function url($url){
		header("Location: $url");
	}

	 if (isset($_POST['submit'])) {
				$bank = $_POST['bank'];
			
			switch ($bank) {
	case 1:
		url("createacc.php");
		break;

	case 2:
		url("depositamount.php");
		break;
	break;

	case 3:
		url("withdrawamount.php");
		break;
	break;

	case 4:
		url("classes/displaybalance.php");
	break;
	
	case 5:
		url("classes/displaydetails.php");
	break;
	
	case 6:
		url("exit.php");
	break;

	default:
	echo "invalid choice.";
}

}
?>

