<?php

// Functions meant to generate html text

	function head() {
$text = <<<TEXT

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/
	bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="/resources/css/style.css">
</head>
TEXT;
echo $text;
	}

	function title() {
$text = <<<TEXT
<header class="bgimage">
	<div class="Header container-fluid">
		<h1> AKPsight </h1>
	</div>
</header>
TEXT;
echo $text;
	}
	
	function footer() {
$text = <<<TEXT
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="/resources/js/script.js"></script>
<script src="/resources/js/bootbox.min.js"></script>
TEXT;
	echo $text;
	}


	function nav() {
$text = <<<TEXT
<nav style="margin: 0;" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Committee Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/Committee-Information/Investment/index.php">Investment</a></li>
            <li><a href="#">Professional Development</a></li>
            <li><a href="#">Brotherhood</a></li>
            <li><a href="#">Philanthropy</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Consulting</a></li>
            <li><a href="#">Sustainability</a></li>	
            <li><a href="#">Etc.</a></li>
          </ul>
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Committee Involvement <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/Committee-Involvement/Professional-Development/index.php">Professional Development</a></li>
            <li><a href-"#">Investment</a></li>
            <li><a href="#">Consulting</a></li>
            <li><a href="#">Fundraising</a></li>
          </ul>
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Committee Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/Committee-Management/Fundraising/index.php">Fundraising</a></li>
		  </ul>
		<li><a href="/News.php"> News <span class="sr-only">(current)</span></a></li>
		<li><a href="/Profile.php">Profile</a></li>
		<li><a href="/Messages.php">Messages</a></li>
		</li>
		</ul>
	  
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
TEXT;
echo $text;
	}

	function nav_login() {
$text = <<<TEXT

	<nav style="margin: 0;" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-header" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
        <li><a href="/AKPsi-Attendance/Login.php">Login</a></li>
		</li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
TEXT;
echo $text;
	}

//General Input Fucntions
	function show_subitem() {
$text = <<<TEXT
		$(document).ready(function () {
			var subitem = $(".subitem");
			$('.item').on("click", "li", function () {
				subitem.hide();
				$(".subitem", this).show();
			});
		});
TEXT;
echo $text;
	}
	
	function send_text($title, $alert, $class) {
$text = <<<TEXT
		$(document).on("click", $class, function(e) {
			bootbox.prompt({
				title: $title,
				value: "Type here",
				callback: function(result) {               
					if (result === null) {                    	  
					} else {
						bootbox.alert($alert);                          
					}
				}
			});
		});
TEXT;
echo $text;
	}

	
// Javascript Functions
	
?>