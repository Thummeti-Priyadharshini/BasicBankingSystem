<?php


// Create connection
$conn = new mysqli('localhost','root','','sparksfoundation');

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>