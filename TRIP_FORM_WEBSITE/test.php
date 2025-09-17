<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "trip";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("❌ Failed to connect: " . mysqli_connect_error());
}
echo "✅ Successfully connected to database '$database'";
?>
