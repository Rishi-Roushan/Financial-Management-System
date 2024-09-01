<?php
// db.php

$servername = "localhost";
$username = "root"; // Default XAMPP/WAMP username
$password = "register@123";     // Default XAMPP/WAMP password
$dbname = "wealth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
