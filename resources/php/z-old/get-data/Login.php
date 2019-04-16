<?php
		
	function login_start() {
		if (isset($_POST['submit'])) {
			if ((filled_in($_POST["password"])) && (filled_in($_POST["username"]))) {
					header("Location: http://localhost:8080/AKPsight/php/authentication/Login_Check.php?pass=" . $_POST["password"] . "&user=" . $_POST["username"]);
			} else {
				$message = "You need to type in text for your username and password.";
			}
		} else {
			$message = "";
		}
		if (isset($_GET['success'])) {
			 if ($_GET['success'] == "no") {
				$message = "The username and password combination were invalid.";
			}
		}
		return $message;
	}

	// String Validation Function
	function filled_in($name) {
		return ((isset($name)) && ($name !== "") && (strlen($name) <30));
	}

	
?>