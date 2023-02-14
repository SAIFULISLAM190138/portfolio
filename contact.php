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
echo "Connected successfully";

$retval = mysqli_select_db( $conn, 'contact' );
if(! $retval ) {
   die('Could not select database: ' . mysqli_error($conn));
}
echo "Database contact selected successfully\n";

$name = $_POST['c_name'];
$email = $_POST['c_email'];
$number = $_POST['c_number'];
$message = $_POST['c_message'];
$first_name=$_POST['c_fname'];
$last_name=$_POST['c_lname'];

$sql = "INSERT INTO information (name,email,number,message,first_name,last_name)
VALUES ('$name', '$email', '$number','$message','$first_name','$last_name')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
?>