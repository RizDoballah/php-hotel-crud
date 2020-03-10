<?php
  include 'server.php';
  include __DIR__ . '/../partials/header.php';
 ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Room-Info</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>ROOM_NUMBER</th>
                <th>FLOOR</th>
                <th>BEDS</th>
                <th>CREATED</th>
                <th>UPDATED</th>
              </tr>
            </thead>
            <tbody>
              <td><?php echo $room['id']; ?></td>
              <td><?php echo $room['room_number']; ?></td>
              <td><?php echo $room['floor']; ?></td>
              <td><?php echo $room['beds']; ?></td>
              <td><?php echo $room['created_at']; ?></td>
              <td><?php echo $room['updated_at']; ?></td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php include __DIR__ .'/../partials/footer.php'; ?>
