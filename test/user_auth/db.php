<?php
$host = 'localhost';
$username = 'root';
$password = ''; // Default password for XAMPP MySQL
$dbname = 'userdb';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>