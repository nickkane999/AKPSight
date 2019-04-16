<?php

	// Server Open Functions (Basic)
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

	
	// Server Insert Functions'
	// Add Table
	function table_add_server($connection) {
	$query = "DELETE FROM passwords ";
	$query .= "WHERE key_code = '{$password}' ";
	$query .= "LIMIT 1";
	
	
	$result = mysqli_query($connection, $query);
	
	// Tests if anything was found && if something was successfully changed with connection 
	if ($result && mysqli_affected_rows($connection) == 1) {
		session_start();
		$_SESSION['Download'] = "yes";
		header("Location: http://localhost:8080/Upgraid/Download.php?success=yes");
	} else {
		header("Location: http://localhost:8080/Upgraid/Download.php?success=no");
	}
	
		// Old Stuff
		$array = array($_POST['tableName'], $_POST);
		$_SESSION['table_add'] = $array[1];

	/* Test code for creating a table
			CREATE TABLE table_name (
			column_name1 definition,
			column_name2 definition,
			column_name3 definition,
			options
		);
			Definition (Examples): id INT(11) NOT NULL AUTO_INCREMENT, menu_name VARCHAR(30) NOT NULL, visible TINYINT(1), PRIMARY KEY (id)
	*/

	}

	
	// Client-Side Functions
	// Add Table
	function any_add($connection) {
		$table = "users";
		$query = $_REQUEST["query"];

		if (mysqli_query($connection, $query)) {
			echo "<br>Query Successful";			
		} else {
			echo "Error creating database: " . mysqli_error($connection);
		}
	}

	
	// Add User
	function user_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}


	//  Add Event For User Participation
	function user_event_add($connection) {
		$table = "participation";
		$query = "ALTER TABLE {$table} ";
		$query .= "ADD " . str_replace(' ', '', $_REQUEST["eventName"]) . " VARCHAR(40);";		
		echo $query;

		if (mysqli_query($connection, $query)) {
			echo "Query Successful";			
		}
	}

	//  Remove Event For User Participation
	function user_event_remove($connection) {
		$table = "participation";
		$query = "ALTER TABLE {$table} ";
		$query .= "DROP COLUMN " . str_replace(' ', '', $_REQUEST["eventName"]);		
		echo $query;

		if (mysqli_query($connection, $query)) {
			echo "<br>Query Successful";			
		}
	}

	//  Add Position For User Profile
	function user_update_add($connection) {
		$table = "users";
		$query = "ALTER TABLE {$table} ";
		$query .= "ADD " . str_replace(' ', '', $_REQUEST["eventName"]) . " VARCHAR(40);";		
		echo $query;

		if (mysqli_query($connection, $query)) {
			echo "Query Successful";			
		}
	}

	
	// Member Committee Involvement
	function user_committee_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}	

	
	// Current Event Details/Involvement (One Record for each held event)
	function event_record_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}


	// Past Event Details/Involvement (One Record for each held event)
		// Multiple functions separated by table call, or dropdown menu allowing selection of different types of menus, brought up within function call
	function event_record_transfer() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}

	
	// General Event Advice/Information (One Record for each type of event)
		// Multiple functions separated by tables for committees, or dropdown menu allowing selection of different types of menus, brought up within function call
	function event_general_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}

	
	// Committee Position Resonsibilities
		// Multiple functions separated by tables for committees, or dropdown menu allowing selection of different types of menus, brought up within function call
	function committee_position_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}
	
	
	// Committee Head Resonsibilities (All in one table)
	function committee_head_add() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
				header("Location: http://localhost:8080/AKPsi-Attendance/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				return "Add was unsuccessful";
			}	
		}
	}




	// Extra Function
	// String Validation Function
	function filled_in($name) {
		return ((isset($name)) && ($name !== "") && (strlen($name) <30));
	}
	
?>