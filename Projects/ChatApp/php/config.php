<?php
  $hostname = "localhost";
  $username = "lavkushm_chat";
  $password = "lk12015023@";
  $dbname = "lavkushm_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
