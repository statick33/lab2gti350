<?php 
	session_start();

	if (!isset($_SESSION['auth'])) {
	  $_SESSION['auth'] = 'logged';
	  
	} 
	header('Location: index.php');      
?>