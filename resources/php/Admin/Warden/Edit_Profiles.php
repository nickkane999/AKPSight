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
		<h1> Add Committee Role </h1>
		<form action="profile_add.php" method="POST">
			Username<input type="text" name="usernameAdd"/><br>
			Member Position<input type="text" name="memberAdd"/><br>
			Head Position<input type="submit" value="headAdd" />
		</form>
			
	</div>
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<h1> Remove Committee Role </h1>
		<form action="profile_remove.php" method="POST">
			Username<input type="text" name="usernameDelete"/><br>
			Member Position<input type="text" name="memberDelete"/><br>
			Head Position<input type="submit" value="headDelete" />
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

