<?php

	include("/functions/database_basic.php");
	$connection = connect();

	function member_verification($connection) {
		$text = "";
		$query = "SELECT * FROM users	WHERE username = '" . $_REQUEST["email"] . "';";
		if (mysqli_query($connection, $query)) { 	// Tests if anything was found && if something was successfully changed with connection 
			$query = "INSERT INTO events (user_id, event_id) VALUES ('2', '2'); "
			$row = mysqli_fetch_assoc($result) 
			
			mysqli_query($connection, $query)
			
			$text .= "<tr><td>" . $row["eventName"] .  "</td><td>" . $row["date"] . "</td><td class=\"" . $status_class . "\">" . $status . "</td><td>" . $row["points"]. "</td></tr>";
		echo $text;
		}
	}

	
	
	function member_add($connection) {
		$text = "";
		$table = "users";
		$query = "	SELECT events.eventName, events.date, attendance.status, events.points, events.presentPast, events.description
					FROM events
					INNER JOIN attendance ON events.id = attendance.event_id
					INNER JOIN users ON users.id = attendance.user_id
					WHERE users.username = '" . $_SESSION["username"] . "';";
		INSERT INTO events (user_id, event_id) VALUES ('2', '2');

		$result = mysqli_query($connection, $query); // True or false if query works and finds record
		if (mysqli_query($connection, $query)) { 	// Tests if anything was found && if something was successfully changed with connection 
			while($row = mysqli_fetch_assoc($result)) {
				$status = process_status($row["status"]);
				$status_class = process_status_class($row["status"]);
				$text .= "<tr><td>" . $row["eventName"] .  "</td><td>" . $row["date"] . "</td><td class=\"" . $status_class . "\">" . $status . "</td><td>" . $row["points"]. "</td></tr>";
			}
		echo $text;
		}
	}
	
	participation($connection);
	
?>