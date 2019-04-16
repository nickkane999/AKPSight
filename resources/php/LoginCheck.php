<?php

	include("/functions/database_basic.php");

	function login_grab($connection) {
		$table = "users";
		$username = $_GET['user'];
		$password = $_GET['pass'];
		$query = "SELECT * FROM {$table} WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";

		$result = mysqli_query($connection, $query); // True or false if query works and finds record
		if ($result && mysqli_affected_rows($connection) == 1) { 	// Tests if anything was found && if something was successfully changed with connection 
			session_start();
			$array = mysqli_fetch_array($result); // Gets all values needed from specific query according to name

			$_SESSION['id'] = $array["id"];
			$_SESSION['username'] = $array['username'];
			header("Location: /Profile.php");
		} else {
			header("Location: /Login.php?success=no");
		}	
	}

		
	
?>
<?php
	session_start();
	
	$connection = connect();
	login_grab($connection); 	
	close($connection);
?>