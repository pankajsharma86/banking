<?php
		error_reporting(0);
session_start();
		
		
		session_destroy();
		session_write_close();
		echo  "Thank you for using Bank System!";
		exit(0);
?>