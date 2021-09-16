<?php 

  include('config/db_connect.php');

  if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);

    $sql= "DELETE FROM games WHERE id = $id_to_delete";

    if(mysqli_query($conn, $sql)){
      header('Location: index.php');
    }
     else {
      echo 'query error: '. mysqli_error($conn);
    }

  }


  if(isset($_GET['id'])){

    $id =  $_GET['id'];

  

    $result = mysqli_query($conn, "SELECT  *FROM  games WHERE id = $id");

    $game = mysqli_fetch_assoc($result);
  }

?>

<!DOCTYPE html>
<html>

  <?php include('templates/header.php'); ?>

  <div class="container center">
    <?php if($game): ?>
      <h4 style="color: whitesmoke;"><?php echo $game['Title']; ?></h4>
      <p style="font-size: 25px; color: whitesmoke;">Created by <?php echo $game['Email']; ?></p>
      <h5 style="color:whitesmoke; ">Price : <?php echo $game['Price'] ?></h5>
      <p style="font-size: 20px; color:whitesmoke"><?php echo date($game['Created_at']); ?></p>

      <!-- DELETE FORM -->
      <form action="details.php" method="POST">
        <input type="hidden" name="id_to_delete" value="<?php echo $game['ID']; ?>">
        <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
      </form>

    <?php else: ?>
      <h5>No such Game exists.</h5>
    <?php endif ?>
  </div>

  <?php include('templates/footer.php'); ?>

</html>