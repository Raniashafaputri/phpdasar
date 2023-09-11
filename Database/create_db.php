<?php
$servername = "localhost";
$username = "root";
$password = "";
$sdbname ="db_sekolah";

// Create connection
$conn = new mysqli($servername, $username, $password, $sdbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE contoh1";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}