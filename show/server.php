<?php
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../functions.php';


  if(empty($_GET['id'])) {
    die('NO ID');
  }
    $idRoom = $_GET['id'];

    // $sql = "SELECT * FROM stanze WHERE `id`= $idRoom";
    // $result = $conn->query($sql);
    //
    // if ($result && $result->num_rows > 0) {
    //   $room = $result->fetch_assoc();
    //
    // } elseif ($result) {
    // echo "0 results";
    // } else {
    // echo "query error";
    // }
    $room = getById($conn, 'stanze', $idRoom);
    $conn->close();
