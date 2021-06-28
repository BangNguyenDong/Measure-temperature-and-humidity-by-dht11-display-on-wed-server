<?php
  $servername = "localhost";  //Host Name
  $username = "root";         // Database User Name
  $password = "";             // Database User Password
  $db="classcon_iot";         // Database Name
  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);
// Check connection and terminate the code if failed
if($conn->connect_error)die("Connection failed: " . $conn->connect_error);
?>