<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../dist/app.css">
    <title>info-hotel</title>
  </head>
  <body>
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
                <th>CREATED_AT</th>
                <th>UPDATED_AT</th>
              </tr>
            </thead>
            <tbody>
              <?php include 'server.php' ?>
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
  </body>
</html>
