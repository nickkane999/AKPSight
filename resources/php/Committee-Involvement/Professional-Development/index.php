<?php
	function member_professional_info() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("springIce")) {
				bootbox.alert("This is info about spring ice!");
			} else if (($(this)).hasClass("anotherEvent")) {
				bootbox.alert("This is info about a Networking Event!");
			} else if (($(this)).hasClass("anotherEventRole")) {
				bootbox.alert("This is info about the networking event coordinator role!");
			} else if (($(this)).hasClass("springIceRole")) {
				bootbox.alert("This is info about the spring ice role!");
			}
        });				
TEXT;
echo $text;
	}

?>