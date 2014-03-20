<?php 
	if (isset($_SESSION['auth'])) {
		unset($_SESSION['auth']);  
	} 
	header('Location: index.php');      
?>