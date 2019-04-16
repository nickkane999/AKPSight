<?php
	session_start();
	include("../../../../resources/php/functions/all_php.php");
	
	$connection = connect();
	login_grab($connection); 	
	close($connection);
?>