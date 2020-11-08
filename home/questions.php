<?php
    session_start();
    include_once '../database.php';
   
    $cid=$_GET['id'];
    
    $Sql = "SELECT * FROM questions where subcategory='$cid' and publish='1' ";
   $questions = mysqli_query($conn, $Sql);
    
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="mmk">
    <meta name="description" content="Jusno is an Explore Talavadi Get everything about talavadi.It includes thalavady photos,thalavadi resorts,thalavadi weather etc,.">
 
   <title>Jusno | Procedure for everything, Aadhar, Pan, etc</title> 
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="http://jusno.in" />
     <meta charset="UTF-8"> 
    <meta name="theme-color" content="#373942"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/boostrap/maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="../css/boostrap/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../css/boostrap/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="../css/boostrap/maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/main-style.css">
  <link rel="stylesheet" type="text/css" href="../css/responsive-style.css">
  <link rel="icon" href="../icons/jus.png"> 
      <!-- Main CSS -->
  <link rel="stylesheet" href="../css/style.css"> 

</head>

<?php 
  include"../header/header.php"
?>

<!-- ######################  HEADER END ######################### -->

  <div class="container" style="padding-top: 3px;">
  
    <a class="btn btn-success btn-sm" style="color: white;">Ask Quistion</a>
        <?php while($row = mysqli_fetch_assoc($questions)){  ?>

    <li class="list-group-item d-flex justify-content-between align-items-center ">
      <a href="method.php?id=<?php echo $row['id']; ?>&&cid=<?php echo $cid; ?>" style="color: gray;"><?php echo $row['title'] ?></a>
      <span class="badge badge-primary badge-pill">12</span>

      <li  class="list-group-item justify-content-between align-items-center "><p><a href="#"> <?php echo $row['description'] ?></a></p>
      </li>  
    
      <br>

     
<?php }?>

</ul>



<!-- ######################  FOOTER START ######################### -->
<?php
  include"../header/footer.php"
?> 
  <!-- ######################  FOOTER END ######################### -->

 </body>
</html>