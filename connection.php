<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moidatabase";
// $action = $_POST["action"];

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
    die("connection Failed: " . mysqli_connect_error());
    return;
}
