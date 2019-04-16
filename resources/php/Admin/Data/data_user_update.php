<?php
$dbhost = "localhost";
$dbuser = "akpsiperson1";
$dbpass = "akpsiiscool";
$dbname = "akpsi_database";

//INSERT INTO MyGuests (username, password, hours)
//VALUES ('example@miamioh.edu', 'passwordsaredumb', '0')";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Get Data from Form Sheet
//$sql = $_REQUEST["query"];
// Updating Records
if ($_REQUEST["userUpdate"] != "") {
	$sql = "UPDATE users SET username='" . $_REQUEST["userUpdate"] . "' WHERE ". $_REQUEST["whereUpdate"];
} else if ($_REQUEST["passwordUpdate"] != "") {
	$sql = "UPDATE users SET password='" . $_REQUEST["passwordUpdate"] . "' WHERE ". $_REQUEST["whereUpdate"];
} else if ($_REQUEST["hoursUpdate"] != "") {
	$sql = "UPDATE users SET hours='" . $_REQUEST["hoursUpdate"] . "' WHERE ". $_REQUEST["whereUpdate"];
}


if (mysqli_query($conn, $sql)) {
	// Displaying ID of last inserted row 
    echo "<br> Updated user created:<br> Name: " .  $_REQUEST["userUpdate"] . "<br> Password: " . $_REQUEST["passwordUpdate"] . "<br> Hours: " . $_REQUEST["hoursUpdate"];
} else {
    echo "Error creating database: " . mysqli_error($conn);
}



?>

<?php
mysqli_close($conn);
?>

<form action="data_users.php" method="POST">
    <input type="submit" value="Go Back"/>
</form>