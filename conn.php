<?php
 
$conn = new mysqli("localhost", "root", "", "new_crud");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>