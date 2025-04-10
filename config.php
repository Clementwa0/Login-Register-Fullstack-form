<?php

$host = 'localhost'; // Database host
$user = 'root'; // Database username
$password = ''; // Database password
$dbname = 'users'; // Database name

$conn = new mysqli($host, $user, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

?>