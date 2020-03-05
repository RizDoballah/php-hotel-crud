<?php
  include 'database.php';

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
