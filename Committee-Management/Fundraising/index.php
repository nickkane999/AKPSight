<?php
session_start();
include("../../resources/html/common_items.php");
include("../../resources/php/Committee-Management/Fundraising/index.php");
head();
?>

	<script type='text/javascript'>
		
		<?php head_fundraising_info(); ?>

		<?php send_text("\"Position Filled: [Person's Name]\"","\"Your message has been sent!\"", "\".memberRole\""); ?>

		<?php send_text("\"Write comments about [Person's Name]\"", "\"Your comments have been saved and sent!\"", "\".memberComment\"") ?>

		<?php send_text("\"Send a message to [Person's Name]\"", "\"Your message has been sent!\"", "\".memberMessage\"") ?>

		<?php role_info(); ?>

		<?php make_event(); ?>

		<?php add_member(); ?>

		<?php show_subitem(); ?>
		
		<?php filled_Role(); ?>
		
		<?php add_role(); ?>
		
	</script>


	
<?php title(); ?>

<?php nav(); ?>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-12">
		<h1> Scheduled Events </h1>
		<table class="table">
			<tr><th> Events </th> <th> Date </th> <th> Roles </th> <th> Status </th> </tr>
			<tr><td> 1st Cuprising </td> <td> January 30th, 2016 </td> <td><a class="item someEvent"> More Info </a></td> <td class="finishedText"> Finished </td>  <td> </tr>
			<tr><td> 1st Phi Delt Gates </td> <td> March 3rd, 2016 </td><td><a class="item someEvent"> More Info </a></td><td class="requiredText"> In Progress </td> <td> <button class="item requestHelp"> Request Help </button> </td> </tr>
			<tr><td> Green Beer Day Shirts </td> <td> March 10th, 2016 </td> <td><a class="item someEvent"> More Info </a></td><td class="requiredText"> In Progress </td><td> <button class="item requestHelp"> Request Help </button> </tr>
		</table>
		<button class="makeEvent"> Make New Event  </button>
	</div>
</div>
<div class="row">
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Involvement </h1>
		<table class="table">
			<tr><th> Members </th> <th> Involvement </th> <th> Comments </th></tr>
			<tr><td> Person 1 </td> <td> 1st Cuprising: Event Supervisor </td> <td><a class="memberComment"> More Info </a></td><td><button class="memberMessage"> Send Message</button></td></tr>
			<tr><td> Person 2 </td> <td> 1st Phi Delt Gates: Logistics Manager </td> <td><a class="memberComment"> More Info </a></td><td><button class="memberMessage"> Send Message</button> </tr>
		</table>
		<button class="addMember"> Add New Member  </button>
		</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Positions </h1>
		<table class="table">
			<tr><th> Role </th><th> Description</th> <th>Status</th></tr>
			<tr>
				<td> 1st Cuprising: Event Supervisor </td>
				<td><a class="item infoRole"> More Info</a></td>
				<td><a class="applicantRole"> Filled</a></td>
			</tr>
			<tr>
				<td> 2nd Cuprising: Event Supervisor </td>
				<td><a class="item infoRole"> More Info</a></td>
				<td><a class="applicantRole"> 1 Applicant</a></td>
			</tr>
		</table>
		<button class="addRole"> Add New Role  </button>
	</div>
</div>
<div class="row">
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Past Data </h1>
		<table class="table">
			<tr><td> <ul class="item">
				    <li><a> Events </a> <ul class="subitem">
					<li> <a href="/Committee-Management/Fundraising/Past-Events/Phi-Delt-Gates.php"> Phi Delt Gates </a></li>
					<li> <a href=#> Cuprising </a></li>
					<li> <a href=#> Green Beer Day </a></li>
					</li></ul>
			</td></tr></ul>
			<tr><td> <ul class="item">
				    <li><a> Committee Heads </a> <ul class="subitem">
							<li> <a href="/Committee-Management/Fundraising/Past-Leadership/Person1.php"> Person1 </a> </li>
							<li> <a> Person2 </a> </li>
							<li> <a> Person3 </a> </li>
					</li> </ul>
			</td></tr></ul>
		</table>
	</div>
</div>
</div>
		

<?php footer(); ?>

<script>
		$(document).ready(function(e) {
			$('#one').on('click', function(e) {
				$('#loadSpace').load('Test1.txt');
			});
		});
</script>

</body>
</html>

