<?php
session_start();
include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
include("file:///wamp/www/AKPsi-Attendance/extra/data_insert.php");
$connection = connect();
any_add($connection);
head();
?>

<html>
<div class="container-fluid">
<div class="row">
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<form action="SQL.php" method="POST">
			<input type="submit" value="Go Back" />
		</form>
			
	</div>
</div>
</div>