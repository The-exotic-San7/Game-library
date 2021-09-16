<?php 

  include('config/db_connect.php');

  $errors= ['email'=>'','title'=>'','price'=>''];
  $email=$title=$price='';

    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            $errors['email']='An email is required <br />';
        }
        else{
            $email=$_POST['email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors['email']='email must be valid';
            }
        }

        if(empty($_POST['title'])){
            $errors['title']='A title is required <br />';
        }
        else{
            $title=$_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
               $errors['title']= 'Title must be valid';
            }
        }
        if(empty($_POST['price'])){
            $errors['price']= 'A price is required <br />';
        }
        else
        {
            $price=$_POST['price'];
            if(!preg_match('/^[1-9]|[1-9][0-9]|[1-9][0-9][0-9]|[1-9][0-9][0-9][0-9]+$/',$price)){
                $errors['price']='Price must be valid';
            }
        }

        if(array_filter($errors)){
            //echo 'errors in the form';

        }
        else
        {
            $email= mysqli_real_escape_string($conn,$_POST['email']);
            $title=mysqli_real_escape_string($conn,$_POST['title']);

            $price=mysqli_real_escape_string($conn,$_POST['price']);

            $sql="INSERT INTO games(title,price,email) VALUES('$title','$price','$email')";

            if(mysqli_query($conn,$sql))
            {
               header('Location:index.php');
            }else{
                echo 'query error'. mysqli_error($conn);
            }

            
        }
    }
?>
 <!DOCTYPE html>
 <html>
 
    <?php include('templates/header.php'); ?>
    
    <section class="container black-text ">
        <h2></h2><h2></h2></br>
        <form class ="col s12 "style="background: transparent;" action="add.php" method="POST">
            <label style="color: white; font-size: 15px;">Your email:</label>
            <input style="color: white;"type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email'] ?><div>
         </br></br> <label style="color: white;font-size: 15px;">Game Title:</label>
          <input style="color: white;"type= "text"name="title" class="validate" value="<?php echo htmlspecialchars ($title) ?>">
          <div class="red-text"><?php echo $errors['title']?><div>
          </br></br><label style="color: white;font-size: 15px;">Game Price:</label>
          <input style="color: white;" type="text" name="price" class="validate" value="<?php echo htmlspecialchars($price) ?>">
          <div class="red-text"><?php echo $errors['price']?><div>
            <div class="right">
                <button type="submit" name="submit" value="submit"class="btn brand">Submit<i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </section>





<?php include('templates/footer.php'); ?>
 
   
 </html>