<?php

	include("file:///wamp/www/AKPsight/php/references/open_close.php");
	
	
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

	
?>