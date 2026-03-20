<?php
$conn = mysqli_connect("localhost", "root", "", "ctf_lab");
if (!$conn) { die("Database connection failed!"); }
$id = $_GET['id'] ?? 1; 
$query = "SELECT username, password FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);
if ($row = mysqli_fetch_assoc($result)) {
    echo "<h1>Welcome: " . $row['username'] . "</h1>";
    echo "<p>Your Secret: " . $row['password'] . "</p>";
} else { echo "User not found!"; }
?>
