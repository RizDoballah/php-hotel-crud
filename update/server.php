<?php
  include_once __DIR__ . '/../env.php';
  include __DIR__ .'/../database.php';
  include __DIR__ . '/../functions.php';

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

  foreach ($_POST as $key => $value) {
    if (intval($value) == 0) {
      die("$key non e un numero");
    }
  }

  // $sql= "SELECT * from `stanze` WHERE `id` = $roomId";
  // $result = $conn->query($sql);
  //
  // if ($result && $result->num_rows > 0) {
  //   $room = $result->fetch_assoc();
  // } else {
  //   die('id non esistente');
  // }

  $room = getById($conn, 'stanze', $roomId);
  if (!$room) {
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
