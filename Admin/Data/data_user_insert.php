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
$sql = "INSERT INTO users(username, password)
VALUES ('" . $_REQUEST["userInsert"] . "', '" . $_REQUEST["passwordInsert"] . "')";



if (mysqli_query($conn, $sql) == true) {
	// Displaying ID of last inserted row 
    echo "<br> New user created:<br> Name: " .  $_REQUEST["userInsert"] . "<br> Password: " . $_REQUEST["passwordInsert"] . "<br> Hours: " . $_REQUEST["hoursInsert"];
} else {
    echo "Error creating database: " . mysqli_error($conn);
}



// For Multiple Queries
/*

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

*/

// Displaying Rows from Database
/*

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

*/
?>

<?php
mysqli_close($conn);
?>

<form action="data_users.php" method="POST">
    <input type="submit" value="Go Back"/>
</form>