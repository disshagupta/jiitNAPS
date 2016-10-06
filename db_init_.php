<?php 
//database details
$host = "localhost";
$username = "root";
$password = "";
$db="minor_naps";
$table="accounts";


// Create connection
$conn = new mysqli($host, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    # code...

echo "<h1>db initialised and Connected successfully</h1>";
}

?>