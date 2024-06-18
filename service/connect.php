<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "rental";
// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    echo "data berhasil terkoneksi";

mysqli_close($conn);

?>