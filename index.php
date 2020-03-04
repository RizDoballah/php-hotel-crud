<?php include 'database.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>info-hotel</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Rooms</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>ROOM_NUMBER</th>
                <th>FLOOR</th>
                <th>BEDS</th>
                <th>CREATED_AT</th>
                <th>UPDATED_AT</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
            if (!empty($rooms)) {
              foreach ($rooms as $room) { ?>
                <tr>
                  <td><?php echo $room['id'] ?></td>
                  <td><?php echo $room['room_number'] ?></td>
                  <td><?php echo $room['floor'] ?></td>
                  <td><?php echo $room['beds'] ?></td>
                  <td><?php echo $room['created_at'] ?></td>
                  <td><?php echo $room['updated_at'] ?></td>
                  <td><a href="show/show.php?id= <?php echo $room['id'];?>">View</a></td>
                  <td><a href="">UPDATE</a></td>

                </tr>
            <?php }
            }
            ?>

            </tbody>

          </table>

        </div>

      </div>

    </div>

  </body>
</html>
