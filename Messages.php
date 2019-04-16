<?php
	session_start();
	include("/resources/html/common_items.php");
	include("/resources/php/Messages.php");
	head();
?>
	<script type='text/javascript'>

<?php jquery(); ?>

<?php send_text("\"Who would you like to send a message to?\"", "\"Your message has been sent!\"", "\".sendMessage\"") ?>		

<?php send_text("\"What event would you like to request?\"", "\"Your event has been submitted!\"", "\".requestEvent\"") ?>		

	</script>
	
<?php title(); ?>

<?php nav(); ?>


<div class="container-fluid">
<div class="row">
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Current Messages </h1>
		<table class="table">
			<tr>
				<th> Person </th>
				<th> Message </th>
				<th> </th>
			</tr>		
			<tr>
				<td> Person1 </td>
				<td> <a class="item message"> View </a></td>
				<td> <button class="item delete"> Delete Message </td>
			</tr>		
		</table>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Sent Messages </h1>
		<table class="table">
			<tr>
				<th> Person </th>
				<th> Message </th>
			</tr>
			<tr>
				<td> Person 1 </td> 
				<td><a class="item message"> View </a></td>
				<td> <button class="item delete"> Delete Message </td>
			</tr>
			<tr>
				<td> Person 1 </td> 
				<td><a class="item message"> View </a></td>
				<td> <button class="item delete"> Delete Message </td>
			</tr>			
			</table>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Options </h1>
		<table class="table">
			<tr>
				<td><button class="sendMessage"> Send a message </button></th>
			</tr>
			<tr>
				<td><button class="requestEvent"> Request an Event </button></th>
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

