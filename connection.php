<?php
//SETTING IT UPPP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datawebshop";

//YEA GETTING IT
$conn = new mysqli($servername, $username, $password, $dbname);

//if the state collapses :3
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>