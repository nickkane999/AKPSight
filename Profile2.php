<?php
	session_start();
	include("/resources/html/common_items.php");
	include("/resources/php/Profile2.php");	
	login_check();
	$connection = connect();
	grab($connection, "SELECT * FROM users WHERE username = '". $_SESSION['username'] ."' LIMIT 1");
	head();
?>

<?php jquery(); ?>

<?php title(); ?>

<?php nav(); ?>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<h1> Participation </h1>
		<table class="table">
			<tr>
			<th> Event </th> <th> Date </th> <th> Status </th> <th> Points </th>
			</tr>
			<?php participation($connection);
				  close($connection); ?>
		</table>
	</div>
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<h1> Committee Involvement </h1>
		<table class="table">
			<th> Committee </th> <th> Position </th>
			<tr><td> Investment Committee </td> <td> Member </td></tr>
			<tr><td> Consulting Committee </td> <td> Member </td></tr>
			<tr><td> Fundraising Committee </td> <td> Head </td></tr>
		</table>
        <button onclick="intro()"> Logout</a></button>

	</div>
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<br><br>
		<button class="item checkedIn"> Check-In: [X Event]</a></button>
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

