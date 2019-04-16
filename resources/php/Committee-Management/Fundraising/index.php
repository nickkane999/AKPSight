<?php

	function head_fundraising_info() {
$text = <<<TEXT
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("requestHelp")) {
				bootbox.alert("The position has now been made public to apply for");
			} else if (($(this)).hasClass("saveEvent")) {
				bootbox.alert("This event has been saved onto your computer!");
			} else if (($(this)).hasClass("infoRole")) {
				bootbox.alert("This is information about the role!");
			}
        });
TEXT;
echo $text;
	}

	function role_info() {
$text = <<<TEXT
		$(document).on("click", ".someEvent", function(e) {
			bootbox.dialog({
				title: "[Event Name]: [Date]",
				message: '<table>' +
						 '<tr><td>[# of Members] members </td></tr>' +
						 '<tr><td> [Role name]: [Person name] &nbsp' +
						 '<button class="memberComment"> Write Comment </button></td></tr>' +
						 '<tr><td> [Role name]: [Person name] &nbsp' +
						 '<button class="memberComment"> Write Comment </button></td></tr>',
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

	function make_event() {
$text = <<<TEXT
		$(document).on("click", ".makeEvent", function(e) {
			bootbox.dialog({
				title: "Make Event",
				message: '<table class="table">' +
						 '<tr><td>Event Name <br><input type="text" name="eventName"></input></td>' +
						 '<td>Event Date  <br><input type="text" name="eventDate"></input></td></tr>' +
						 '<tr><td>Event Description <textarea name="eventDescription" cols="45" rows="5"></textarea> </td></tr>' + 
						 '<tr><td>Points <select><option value="pointsYes">Yes</option><option value="pointsNo">No</option></select></td><td>Point Amount (If Yes)<input type="text" name"pointValue"></input><td></tr>' +
						 '<tr><td>Event Type &nbsp<select><option value="openEvent">Open Event</option><option value="closedEvent">Closed Event</option></select></td></tr>' +
						 '</table>',
				buttons: {
                    success: {
                        label: "Save Event",
                        className: "btn-success item saveEvent",
                    }
				}
			});
		});		
TEXT;
echo $text;
	}

	function add_member() {
$text = <<<TEXT
		$(document).on("click", ".addMember", function(e) {
			bootbox.dialog({
				title: "Add Member",
				message: '<table class="table">' +
						 '<tr><td>First Name <br><input type="text" name="firstName"></input></td>' +
						 '<td>Last Name <br><input type="text" name="lastName"></input></td></tr>' +
						 '<tr><td>Email<br><input type="text" name="email"></input></td>' +
						 '<td>Recommended Role<br><input type="text" name="roleRecommend"></input></td></tr>' +						 
						 '</table>',
				buttons: {
                    success: {
                        label: "Save Member",
                        className: "btn-success",
						callback: function() {
//							window.location.replace("../../resources/php/Committee-Management/Fundraising/Add-Position.php	");

						}
                    }
				}
			});
		});		
TEXT;
echo $text;
	}

	function add_role() {
$text = <<<TEXT
		$(document).on("click", ".addRole", function(e) {
			bootbox.dialog({
				title: "Add Role",
				message: '<table class="table">' +
						 '<tr><td>Role Name <br><input type="text" name="roleName"></input></td' +
						 '><td> Assign to <select><option value="assignJohn">John</option><option value="assignWill">Will</option><option value="makeApplication">Make Application</option></select>' +
						 '<tr><td>Role Description <textarea name="roleDescription" cols="45" rows="5"></textarea></td>' +
						 '</table>',
				buttons: {
                    success: {
                        label: "Save Role",
                        className: "btn-success",
                    }
				}
			});
		});		
TEXT;
echo $text;
	}

	function filled_Role() {
$text = <<<TEXT
		$(document).on("click", ".applicantRole", function(e) {
			bootbox.dialog({
				title: "1 Applicant or Filled",
				message: '<table class="table">' +
						 '<tr><td>Ryan</td>' +
						 '<td><button class="viewMessage"> View Message</button></td></tr>' +
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