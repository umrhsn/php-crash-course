<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'brad');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

// create connection instance
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  // exit();
  // // exit script if connection fails
  // // This helps prevent potential security vulnerabilities
}
