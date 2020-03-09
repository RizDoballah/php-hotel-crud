<?php
  include __DIR__ .'/../partials/header.php';

 ?>

 <div class="container">
   <div class="row">
     <div class="col-12">
       <form action="server.php" method="post">
         <div class="form-group">
           <label for="room_nmber">Room Number</label>
           <input class="form-control" type="text" name="room_number" placeholder="insert room number" value="">
         </div>
         <div class="form-group">
           <label for="floor">Floor</label>
           <input class="form-control" type="text" name="floor" placeholder="insert floor number" value="">
         </div>
         <div class="form-group">
           <label for="beds">Beds</label>
           <input class="form-control" type="text" name="beds" placeholder="insert beds number"value="">
         </div>
         <div class="form-group">
           <input class="form-control" class="btn btn-submit" type="submit" value="Save">
         </div>
       </form>
     </div>
   </div>
 </div>

 <?php
include __DIR__ . '/../partials/footer.php'
?>
