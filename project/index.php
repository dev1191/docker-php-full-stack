<?php


$servername = "db";
$username = "db_user";
$password = "db_user_pass";
$database = "app_db";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close connection (not strictly necessary for PDO)
$conn = null;