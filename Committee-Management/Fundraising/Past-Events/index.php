<?php
session_start();
include("../../../resources/html/common_items.php");
include("../../../resources/php/Committee-Management/Fundraising/Past-Events/Phi-Delt-Gates.php");
head();
?>
	<script type='text/javascript'>
		<?php show_subitem(); ?>

		<?php descriptions(); ?>

		<?php role_info(); ?>
	</script>

<?php title(); ?>

<?php nav(); ?>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<h1> History </h1>
		<table class="table">
			<tr> <th> Date </th> <th> Cost </th> <th> Revenue </th> </tr>
			<tr> <td> October 25, 2015 </a></td> <td> $150.24 </td> <td> $350.30 </td> </tr>
			<tr> <td> November 23, 2015 </td> <td> $160.24 </td> <td> $400.30 </td> </tr>
		</table>
	</div>
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<h1> Information </h1>
		<table class="table">
			<tr><td> <ul class="item">
				    <li><a>Main Supplies</a> <ul class="subitem">
						<li>Grill</li>
						<li>Spatula</li>
						<li>Bread</li>
						<li>Cheese</li>
						<li>Butter</li>
						<li>Aluminum Foil</li>
						<li>Gloves</li>
						<li>Knife</li>
						<li>Cooler with ice</li>
					</li></ul>
			</td></tr></ul>
			<tr><td> <ul class="item">
				    <li><a>Optional Supplies</a> <ul class="subitem">
							<li>Stereo for Music </li>
							<li>Hot Chocolate Machine</li>
							<li>Water Bottles</li>
					</li> </ul>
			</td></tr></ul>
			<tr><td> <ul class="item">
				    <li><a>Event Advice</a> <ul class="subitem">
							<li><a class="person1">Person1</a></li>
							<li><a>Person2</a></li>
							<li><a>Person3</a></li>
							<li><a>Person4</a></li>
					</li> </ul>
			</td></tr></ul>
		</table>
	</div>
</div>
</div>
		
<?php footer(); ?>

</body>
</html>