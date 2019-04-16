<?php
	session_start();
	include("/resources/html/common_items.php");
	include("/resources/php/Profile.php");	
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
			<tr>
				<td><a class="item infoNight"> Info Night 1: </a></td>
				<td> February 4th, 2016 </td>
				<td class="finishedText"> FINISHED </td>
				<td> 5/5 </td>
			</tr>
			<tr>
				<td><a class="item springIce"> Spring Ice: </td>
				<td> February 4th, 2016 </td>
				<td class="missedText"> INCOMPLETE </td>
				<td> 0/5 </td>
			</tr>
			<tr>
				<td><a> Info Night 2: </a></td>
				<td> February 11th, 2016 </td>
				<td class="finishedText"> FINISHED </td>
				<td> 5/5 </td>
			</tr>
			<tr>
				<td><a> First Round Interviews: </a></td>
				<td> February 15th, 2016 </td>
				<td class="finishedText"> FINISHED </td>
				<td> 10/10 </td>
			</tr>
			<tr>
				<td><a> Voting Chapter: </a></td>
				<td> February 18th, 2016 </td>
				<td class="excusedText"> EXCUSED </td>
				<td> 8/10 </td>
			</tr>
			<tr>
				<td><a> Induction Ceremony: </a></td>
				<td> February 25th, 2016 </td>
				<td class="requiredText"> REQUIRED </td>
				<td> 0/10 </td>
			</tr>			
			<tr>
				<td><a> A Networking Event: </a></td>
				<td> March </td>
				<td class="extraText"> EXTRA </td>
				<td> 2 </td>
			</tr>
			<tr>
				<td><a> Mid Court: </a></td>
				<td> March </td>
				<td class="requiredText"> REQUIRED </td>
				<td> 0/10 </td>
			</tr>			
			<tr>
				<td><a> Honor Court: </a></td>
				<td> April </td>
				<td class="requiredText"> REQUIRED </td>
				<td> 0/10 </td>
			</tr>					
			<tr>
				<td><a> Philanthropy Hours: </a></td>
				<td> May 4th, 2016 </td>
				<td class="requiredText"> REQUIRED </td>
				<td> 5/10 </td>
			</tr>

			<tr>
				<th> Current Participation </th>
				<th> </th>
				<th> </th>
				<th> 28/35 (80%) </th>
			</tr>	
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

