<?php
session_start();
include("../../resources/html/common_items.php");
include("../../resources/php/Committee-Involvement/Professional-Development/index.php");
head();
?>

	<script type='text/javascript'>
		<?php member_professional_info(); ?>
		<?php send_text("'Send a message to your committee chair'", "'Your message has been sent!'", "\".networkRole\"") ?>
	</script>
	
<?php title(); ?>

<?php nav(); ?>


<div class="container-fluid">
<div class="jumbotron infoBox" id="springIce">
	<h1>This is for sprign ice</h1>
</div>
<div class="jumbotron infoBox" id="anotherEvent">
	<h1>This is for antoher event</h1>
</div>
<div class="row">
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Events </h1>
		<table class="table">
			<tr>
				<th> Name </th>
				<th> Date </th>
				<th> Type </th>
				<th> Description </a></th>
			</tr>			<tr>
				<td> Spring Ice: </td>
				<td> February 10th, 2016 </td>
				<td class="requiredText"> REQUIRED </td>
				<td> <a class="item springIce"> More info </a></td>
			</tr>
			<tr>
				<td> A Networking Event: </td>
				<td> March 22nd, 2016 </td>
				<td class="extraText"> Extra </td>
				<td> <a class="item anotherEvent"> More info </a></td>
			</tr>		
		</table>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Committee Roles </h1>
		<table class="table">
			<tr>
				<th> Role </th>
				<th> Available Spots </th>
				<th> Status </th>
				<th> Description </th>
			</tr>
			<tr>
				<td> Spring Ice Coordinator </td> 
				<td> 0 </td>
				<td class="missedText"> Filled </td>
				<td> <a class="item springIceRole"> More info </a></td>
			</tr>
			<tr>
				<td> Networking Event Coordinator </td> 
				<td> 2 </td>
				<td class="finishedText"> Open </td>
				<td> <a class="item anotherEventRole"> More info </a></td>				
				<td><button class="networkRole"> Apply </button><td>
			</tr>
		</table>
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

