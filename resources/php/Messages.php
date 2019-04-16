<?php
		
	function jquery() {
$text = <<<TEXT
		
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("message")) {
				bootbox.alert("This is info about a message!");
            } else if (($(this)).hasClass("delete")) {
				bootbox.alert("This message has been deleted!");
			}
        });
TEXT;
echo $text;
	}

	
?>