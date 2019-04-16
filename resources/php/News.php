<?php
		
	function news() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("crashCourseEvent")) {
				bootbox.alert("This is info about the stock crash course!");
            } else if (($(this)).hasClass("springIce")) {
				bootbox.alert("This is info about spring ice!");
			} else if (($(this)).hasClass("anotherEvent")) {
				bootbox.alert("This is info about another event!");
			} else if (($(this)).hasClass("greenBeerDayRole")) {
				bootbox.alert("This is info about the green beer day shirt designer role!");
            } else if (($(this)).hasClass("businessIdea1")) {
				bootbox.alert("I need help building a business idea, send me a message if your interested!");
            } else if (($(this)).hasClass("requestSent")) {
				bootbox.alert("Your message has been sent!");
			}
        });
TEXT;
echo $text;
	}

	function jquery() {
$text = <<<TEXT
		
	<script type='text/javascript'>
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("message")) {
				bootbox.alert("This is info about a message!");
            } else if (($(this)).hasClass("delete")) {
				bootbox.alert("This message has been deleted!");
			}
        });
	</script>
TEXT;
echo $text;
	}

	
?>