<?php

	function descriptions() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
			if (($(this)).hasClass("phiDeltGatesRun")) {
				bootbox.alert("Here's some advice about running the Phi Delt Gates Event...");
			} else if (($(this)).hasClass("phiDeltGatesSupplies")) {
				bootbox.alert("Here's some advice about getting supplies for Phi Delt Gates...");
			} else if (($(this)).hasClass("phiDeltGatesSchedule")) {
				bootbox.alert("Here's some advice about scheduling Phi Delt Gates...");
			}
        });
TEXT;
echo $text;		
	}

	function role_info() {
$text = <<<TEXT
		$(document).on("click", ".person1", function(e) {
			bootbox.dialog({
				title: "[Person Name] Advice",
				message: '<table>' +
						 '<tr><td><a class="item phiDeltGatesRun">Running the Event</a></td></tr>' +
						 '<tr><td><a class="item phiDeltGatesSupplies"> Getting Supplies beforehand</a></td></tr>' +
						 '<tr><td><a class="item phiDeltGatesSchedule"> Scheduling the Event </a></td></tr>' +
						 '</table>',
				buttons: {
                    success: {
                        label: "Ok",
                        className: "btn-success",
                    }
				}
			});
		});		
TEXT;
echo $text;
	}


?>