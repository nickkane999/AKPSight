<?php
session_start();
include("../../../resources/html/common_items.php");
include("../../../resources/php/Committee-Management/Fundraising/Past-Leadership/Person1.php");
head();
?>


	<script type='text/javascript'>

	<?php show_subitem(); ?>

	<?php descriptions(); ?>
	
	</script>
	
<?php title(); ?>

<?php nav(); ?>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<h1> Event Advice </h1>
		<table class="table">
			<tr><td> <ul class="item" style="padding:0;"> <li><a> Phi Delt Gates </a> 
				<ul class="subitem">
					<li> <a class="item phiDeltGatesRun"> Running the Event </a></li>
					<li> <a class="item phiDeltGatesSupplies"> Getting Supplies beforehand </a></li>
					<li> <a class="item phiDeltGatesSchedule"> Scheduling the Event </a></li>
				</ul>
			</li></ul></td></tr>
			<tr><td> <ul class="item" style="padding:0;"> <li><a> Cuprising </a> 
				<ul class="subitem">
					<li> <a class="item cuprisingRun"> Running the Event </a></li>
					<li> <a class="item cuprisingSchedule"> Scheduling the Event </a></li>
				</ul>
			</li></ul></td></tr>
			<tr> <td> <a class="item GBDSchedule"> Green Beer Day </a></td> </tr>
		</table>
	</div>
</div>
</div>
		
<?php footer(); ?>

</body>
</html>