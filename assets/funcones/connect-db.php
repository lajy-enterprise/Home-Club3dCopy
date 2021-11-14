<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "club3d";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO refistro (registroname,registromail,registropass)
VALUES ($name, $mail, $pass)";

if (mysqli_query($conn, $sql)) {
  echo "You have successfully registered";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

