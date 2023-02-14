<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name="contact";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM information";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($data as $row) {
    echo "<p>id " . $row['id'] . "</p>";
    echo "<p>name " . $row['name'] . "</p>";
    echo "<p>Cdetails " . $row['first_name'] . "</p>";
    echo "<p>Cdetails " . $row['last_name'] . "</p>";
    echo "<p>massage: " . $row['email'] . "</p>";
    echo "<p>phone" . $row['number'] . "</p>";
    echo "<p>Cdetails " . $row['message'] . "</p>";
}

?>


