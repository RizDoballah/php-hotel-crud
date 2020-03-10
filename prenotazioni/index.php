<?php
 include 'server.php';
 include __DIR__ . '/../partials/header.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>PRENOTAZIONI</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>ROOM ID</th>
                <th>CREATED</th>
                <th>UPDATED</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
            if (!empty($results)) {
              foreach ($results as $prenotazione) { ?>
                <tr>
                  <td><?php echo $prenotazione['id'] ?></td>
                  <td><?php echo $prenotazione['stanza_id'] ?></td>
                  <td><?php echo $prenotazione['created_at'] ?></td>
                  <td><?php echo $prenotazione['updated_at'] ?></td>
                  <td><a href="show/show.php?id= <?php echo $prenotazione['id'];?>">View</a></td>
                  <td><a href="update/update.php?id= <?php echo $prenotazione['id'];?>">UPDATE</a></td>
                  <td>
                    <form class="delete" action="delete/server.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $prenotazione['id'];?>">
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

   <?php include __DIR__ . '/../partials/footer.php'; ?>
