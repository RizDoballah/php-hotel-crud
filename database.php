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

  $sql = "SELECT * FROM stanze";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
  // output data of each row
    $rooms = [];
    while($row = $result->fetch_assoc()) {
      $rooms[] = $row;
    }
    // var_dump($rooms);

  } elseif ($result) {
  echo "0 results";
  } else {
  echo "query error";
  }
  $conn->close();
