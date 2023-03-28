<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "persons";


// Create connection
$conn = mysqli_connect($servername, $username, $password , $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 //echo "Connected successfully";
 
$name = $_POST['name'];
$email = $_POST['email'];
  
  
$sql = "INSERT INTO users (name , email)
VALUES ('$name', '$email')";



if (mysqli_query($conn, $sql)) {
    echo "Thank you for Submitting Form!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
