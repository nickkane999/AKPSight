<?php

	function investment_info() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("crashCourseEvent")) {
				bootbox.alert("This is info about the stock crash course!");
			} else if (($(this)).hasClass("stockPitch")) {
				bootbox.alert("This is info about the stock pitch!");
			} else if (($(this)).hasClass("initialPitchRole")) {
				bootbox.alert("This is info about the initial stock pitch role!");
			} else if (($(this)).hasClass("sectorRole")) {
				bootbox.alert("This is info about the sector research role!");
			}
        });
TEXT;
echo $text;
	}

