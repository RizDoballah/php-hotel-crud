<?php
  $servername = "localhost:8889";
  $username = "root";
  $password = "root";
  $dbname = "hotel";
  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection

  if ($conn && $conn->connect_error) {
    echo "Connexion Error: " . $conn->connect_error; die();
  }
