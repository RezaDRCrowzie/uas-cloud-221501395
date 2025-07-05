<?php
$servername = getenv('MYSQL_HOST') ?: 'db'; //or you could use hostname (service name if using docker-compose)
$username = getenv('MYSQL_USER') ?: 'root';
$password = getenv('MYSQL_PASSWORD') ?: 'root';
$dbname = getenv('MYSQL_DATABASE') ?: 'uas_2212501395';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


