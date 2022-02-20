<?php


$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "creative_solutionz";

// Create connection
$conn = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}


?>
