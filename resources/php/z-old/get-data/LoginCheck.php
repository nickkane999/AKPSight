<?php

	function connect() {
		$dbhost = "localhost";
		$dbuser = "akpsiperson1";
		$dbpass = "akpsiiscool";
		$dbname = "akpsi_database";
		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		// Testing connection success/failure
		if(mysqli_connect_errno()) {
			die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"); 
		}
		return $connection;
	}

	function close($connection) {
		mysqli_close($connection);
	}

	function login_grab($connection) {
		$table = "users";
		$username = $_GET['user'];
		$password = $_GET['pass'];
		$query = "SELECT * FROM {$table} WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";

		$result = mysqli_query($connection, $query); // True or false if query works and finds record
		if ($result && mysqli_affected_rows($connection) == 1) { 	// Tests if anything was found && if something was successfully changed with connection 
			session_start();
			$array = mysqli_fetch_array($result); // Gets all values needed from specific query according to name

			$_SESSION['logged'] = "Yes";
			$_SESSION['username'] = $array['username'];
			$_SESSION['hours'] = $array['hours'];
			header("Location: http://localhost:8080/AKPsight/public/Profile.php");
		} else {
			header("Location: http://localhost:8080/AKPsight/public/Login.php?success=no");
		}	
	}

		
	
?>