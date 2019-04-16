<?php
	function descriptions() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("cuprisingRun")) {
				bootbox.alert("Here's some advice about running Cuprising...");
			} else if (($(this)).hasClass("cuprisingSchedule")) {
				bootbox.alert("Here's some advice about scheduling Cuprising...");
			} else if (($(this)).hasClass("phiDeltGatesRun")) {
				bootbox.alert("Here's some advice about running the Phi Delt Gates Event...");
			} else if (($(this)).hasClass("phiDeltGatesSupplies")) {
				bootbox.alert("Here's some advice about getting supplies for Phi Delt Gates...");
			} else if (($(this)).hasClass("phiDeltGatesSchedule")) {
				bootbox.alert("Here's some advice about scheduling Phi Delt Gates...");
			} else if (($(this)).hasClass("GBDSchedule")) {
				bootbox.alert("Here's some advice about Green Beer Day...");
			}
        });
TEXT;
echo $text;		
	}