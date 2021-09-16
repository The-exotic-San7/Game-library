<?php 

   include('config/db_connect.php');

   
   $sql = 'SELECT title, price, id FROM games ORDER BY created_at';

   
   $result = mysqli_query($conn, $sql);

   
   $games = mysqli_fetch_all($result, MYSQLI_ASSOC);

   mysqli_free_result($result);

   // close connection
   mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
   
   <?php include('templates/header.php'); ?>
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">

   <h3></h3>

   <div class="container">
      <div class="row">

         <?php foreach($games as $game): ?>

            <div class="col s6 m3">
               <div class="card">
                  <div class="card-image">
                     <img src="img/steam.png" class="responsive-img">

                  </div>
                  <div class="card-content">
                     <h6><?php echo htmlspecialchars($game['title']); ?></h6>
                     
                  </div>
                  <div class="card-action right-align">
                     <a style="font-size: 13px;color: darkgrey;" class="brand-text" href="details.php?id=<?php echo $game['id'] ?>">more info</a>
                  </div>
               </div>
            </div>

         <?php endforeach; ?>

      </div>
   </div>

   <?php include('templates/footer.php'); ?>

</html>