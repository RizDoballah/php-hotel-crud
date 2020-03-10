<?php
  include_once __DIR__ . '/../env.php';
  include __DIR__ . '/../database.php';

  if(empty($_POST['room_number'])) {
    die('numero di stanza non inserito');
  }
  if(empty($_POST['floor'])) {
    die('piano di stanza non inserito');
  }
  if(empty($_POST['beds'])) {
    die('numero letti non inserito');
  }

  $roomNumber = $_POST['room_number'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  foreach ($_POST as $key => $value) {
    if (intval($value) == 0) {
      die("$key non e un numero");
    }
  }

  $sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) VALUES (?,?,?, NOW(), NOW())";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iii", $roomNumber, $floor, $beds);
  $stmt->execute();

  if(isset($stmt->insert_id)) {
    header("Location: $basePath/show/show.php?id=$stmt->insert_id");
  } else {
    echo 'KO';
  }

  $conn->close();
