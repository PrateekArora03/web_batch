<?php
	
	setcookie("login_emailid" , "" , time() - 1 );

	header('Location:/login.php');
?>