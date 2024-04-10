<?php
$servername = "localhost";
$username = "root";
$password = ""; // Change this if your MySQL setup has a password
$dbname = "presentation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

