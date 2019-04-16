<?php
	session_start();
	ini_set('display_errors',1); 
	error_reporting(E_ALL);
	include("../../../../home/akpsfzgp/public_html/MU/resources/html/common_items.php");
	include("../../../../home/akpsfzgp/public_html/MU/resources/php/Login.php");
	$message = login_start(); // Gets login procedure, and also returns value that comes out of login function
	head();
?>

<?php title(); ?>

<?php nav_login(); ?>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-3">
		<h1> Login </h1>
		<form id="Download1" action="Login.php" method="post">
			Username: <input id="Download_Code" type="text" name="username" value="">  </br></br>
			Password: <input id="Download_Code" type="password" name="password" value=""> </br></br>
			<input id="Download_File" type="submit" name="submit" value="Login">
		</form>
	</div>
	<div class="col-xs-3">
		<p></br><?php echo $message ?></p>
	</div>
</div>
</div>
		
<div class="row">
<div id="side" class="col-md-2">
</div>



</div>

<?php footer(); ?>

</body>
</html>


<!-- Thing used for bottom navigation bar 
<div class="navbar navbar-default navbar-fixed-bottom">
	<div class="container">
		<p class="navbar-text pull-left"> Site dadada </p> 
	</div>
</div>
-->
