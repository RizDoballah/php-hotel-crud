<?php include 'database.php';
if(empty($_POST['id'])) {
  die('NO ID');
}
  $idRoom = $_POST['id'];

  $sql = "UPDATE stanze SET room_number ='400' WHERE `id` = $idRoom";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();

  } elseif ($result) {
  echo "0 results";
  } else {
  echo "query error";
  }
  $conn->close();
