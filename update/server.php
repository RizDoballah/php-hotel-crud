<?php
  include_once __DIR__ . '/../env.php';
  include __DIR__ .'/../database.php';

  if (empty($_POST['id'])) {
    die('id non inserito');
  }
  if (empty($_POST['room_number'])) {
    die('numero di stanza non inserito');
  }
  if (empty($_POST['floor'])) {
    die('piano di stanza non inserito');
  }
  if (empty($_POST['beds'])) {
    die('numero letti non inserito');
  }

  $roomId = $_POST['id'];
  $roomNumber = $_POST['room_number'];
  $floor =$_POST['floor'];
  $beds = $_POST['beds'];

  $sql= "SELECT * from `stanze` WHERE `id` = $roomId";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
  } else {
    die('id non esistente');
  }

  $sql = "UPDATE `stanze` SET `room_number` = $roomNumber, `beds` = $beds, `floor` = $floor WHERE `id` = $roomId ";

  $result = $conn->query($sql);
  if ($result) {
    header("Location: $basePath/show/show.php?id=$roomId");
  } else {
    echo "KO";
  }

    $conn->close();
