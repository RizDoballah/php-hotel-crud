<?php include 'database.php';
  $idRoom = $_GET['id'];

  $sql = "SELECT * FROM stanze WHERE `id`= $idRoom";
  $result = $conn->query($sql);
  
  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();

  } elseif ($result) {
  echo "0 results";
  } else {
  echo "query error";
  }
  $conn->close();
