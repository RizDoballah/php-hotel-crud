<?php include __DIR__ . '/../database.php';

  if(empty($_POST['id'])) {
    die('NO ID');
  }
  $idRoom = $_POST['id'];

  $sql = "SELECT * FROM stanze WHERE `id`= $idRoom";
  $result = $conn->query($sql);
  if ($result && $result-> num_rows == 0) {
    die('id non esistent');
  }

  $sql = "DELETE FROM stanze WHERE `id`= $idRoom";
  $result = $conn->query($sql);

  if ($result) {
    header("Location: $basePath?roomId=$idRoom");
  } else {
    echo "KO";
  }
  $conn->close();
