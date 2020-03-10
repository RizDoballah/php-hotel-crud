<?php
 include 'server.php';
 include __DIR__ . '/../../partials/header.php';
 ?>
 <div class="container">
   <div class="row">
     <div class="col-12">
       <h1>Prenotazione Numero : <?php echo $prenotazione['id']; ?></h1>
       <table class="table">
         <thead>
           <tr>
             <th>ROOM NUMBER</th>
             <th>Guest</th>
             <th>CREATED</th>
             <th>UPDATED</th>
           </tr>
         </thead>
         <tbody>
           <td><?php echo $prenotazione['room_number']; ?></td>
           <td><?php echo $prenotazione['name'] . ' ' . $prenotazione['lastname']; ?></td>
           <td><?php echo $prenotazione['created_at']; ?></td>
           <td><?php echo $prenotazione['updated_at']; ?></td>
         </tbody>
       </table>
     </div>
   </div>
 </div>


 <?php include __DIR__ . '/../../partials/footer.php'; ?>
