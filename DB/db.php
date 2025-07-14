<?php
$env = parse_ini_file('.env');
$servername = $env['DB_SERVER']; // Replace with your database server name
$username = $env['DB_USERNAME']; // Replace with your database username
$password =$env['DB_PASSWORD']; // Replace with your database password
$dbname = $env['DB_NAME']; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
