<?php
session_start();
include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
include("file:///wamp/www/AKPsi-Attendance/extra/data_grab.php");
	
login_check();
$connection = connect();
grab($connection, "SELECT * FROM users WHERE username = '". $_SESSION['username'] ."' LIMIT 1");
head();
?>

<header class="bgimage">
	<div class="Header container-fluid">
		<h1> AKPsi-Attendance </h1>
	</div>
</header>

<?php nav(); ?>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<h1> Add New Events </h1>
		<form action="participation_add.php" method="POST">
			<input type="text" name="eventName"/><br>
			<input type="submit" value="Run Query" />
		</form>
			
	</div>
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<h1> Remove Events </h1>
		<form action="participation_remove.php" method="POST">
			<input type="text" name="eventName"/><br>
			<input type="submit" value="Run Query" />
		</form>
			
	</div>
</div>
</div>
		
<div class="container-fluid">
<div class="row">
</div>
</div>


</div>

<?php footer(); ?>

</body>
</html>

