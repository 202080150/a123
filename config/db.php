<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "1234";
  $dbase = "hrm";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbase);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
//   echo "connected.";
?>