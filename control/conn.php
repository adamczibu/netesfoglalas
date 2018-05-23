<?php
error_reporting(E_ALL);
  $servername = "localhost:3306";
  $username = "root";
  $password = "Misco123";
  $db = 'netesfoglalas';

  //phpinfo();
  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);
  // Check connection
  

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>
