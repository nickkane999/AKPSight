<?php
$dbhost = "localhost";
$dbuser = "akpsiperson1";
$dbpass = "akpsiiscool";
$dbname = "akpsi_database";

//INSERT INTO MyGuests (username, password, hours)
//VALUES ('example@miamioh.edu', 'passwordsaredumb', '0')";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

// Get Data from Form Sheet
//$sql = $_REQUEST["query"];
$sql = "INSERT INTO users (username, password, hours)
VALUES ('example@miamioh.edu', 'passwordsaredumb', '0')";

$result = mysqli_query($conn, $sql);

// For 1 Query 


if (mysqli_query($conn, $sql)) {
	// Displaying ID of last inserted row 
    $last_id = mysqli_insert_id($conn);
    echo "<br> New record created successfully. Last inserted ID is: " . $last_id;
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

// Notes
/*
Prepared Statements were Skipped
*/
?>