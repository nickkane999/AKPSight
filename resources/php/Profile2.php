<?php

	include("/functions/database_basic.php");
	
	
	function jquery() {
		$text = <<<TEXT
			<script type='text/javascript'>
				$(document).on("click", ".item", function(e) {
					if (($(this)).hasClass("checkedIn")) {
						bootbox.alert("You have checked in successfully!");
					} else if (($(this)).hasClass("infoNight")) {
						bootbox.alert("This is info about Info Night1!");
					}
				});
				function intro() {
					window.location.href = "http://localhost:8080/AKPsight/public/Profile.php";
				}
			</script>
TEXT;
		echo $text;
	}
			
	function login_check() {
		if (($_SESSION['logged']) != "Yes")  {
			header("Location: http://localhost:8080/AKPsight/public/Login.php?");
		}
	}
	
	function filled_in($name) {
		return ((isset($name)) && ($name !== "") && (strlen($name) <30));
	}


	function process_status($item) {
		$outcomes = array("EXTRA", "REQURED", "EXCUSED", "UNEXCUSED", "FINISHED", "INCOMPLETE", "EXTRA", "EXTRA");
		foreach($outcomes as $index => $value) {
			if ($item == $index) {
				return $value;
			}
		}
	}

	function process_status_class($item) {
		$outcomes = array("extraText", "requiredText", "excusedText", "excusedText", "finishedText", "missedText", "extraText", "extraText");
		foreach($outcomes as $index => $value) {
			if ($item == $index) {
				return $value;
			}
		}
	}

	function participation($connection) {
		$text = "";
		$table = "users";
		$query = "	SELECT events.eventName, events.date, attendance.status, events.points, events.presentPast, events.description
					FROM events
					INNER JOIN attendance ON events.id = attendance.event_id
					INNER JOIN users ON users.id = attendance.user_id
					WHERE users.username = '" . $_SESSION["username"] . "';";
		
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

?>