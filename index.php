<?php
 include 'server.php';
 include 'partials/header.php';
 ?>

 <?php if(!empty($_GET['roomId'])) { ?>
    <div class="alert alert-danger">
      Hai cancellato la stanza id : <?php echo $_GET['roomId'] ?>
    </div>
 <?php } ?>

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
            if (!empty($results)) {
              foreach ($results as $room) { ?>
                <tr>
                  <td><?php echo $room['id'] ?></td>
                  <td><?php echo $room['room_number'] ?></td>
                  <td><?php echo $room['floor'] ?></td>
                  <td><?php echo $room['beds'] ?></td>
                  <td><?php echo $room['created_at'] ?></td>
                  <td><?php echo $room['updated_at'] ?></td>
                  <td><a href="show/show.php?id= <?php echo $room['id'];?>">View</a></td>
                  <td><a href="update/update.php?id= <?php echo $room['id'];?>">UPDATE</a></td>
                  <td>
                    <form class="delete" action="delete/server.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $room['id'];?>">
                      <input class="btn-danger"type="submit" name="" value="DELETE">
                    </form>
                  </td>

                </tr>
            <?php }
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <?php include 'partials/footer.php' ?>
