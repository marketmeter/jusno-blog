<?php
    session_start();
    include_once '../database.php';
   
   $Sql = "SELECT * FROM category";
  $category = mysqli_query($conn, $Sql);

   $Sql1 = "SELECT * FROM subcategory";
  $subcategories1 = mysqli_query($conn, $Sql1);
        $subcategory=array();
       while($subcategories = mysqli_fetch_assoc($subcategories1)){ 
        $subcategory[]=$subcategories;
      }
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

<!-- #######################     CONTENT     ######################## -->


<div class="container">
 <br>

 <a type="button" class="btn btn-secondary" href="addcategory.php">Add Category</a>
  <a type="button" class="btn btn-success" href="subcategory.php">Add Sub Category</a>

  <table class="table table-srtiped">
   
    <?php while($categories = mysqli_fetch_assoc($category)){  

        # code...
       if ($categories['publish']=='0') {
        $value='1';
        $publish='Unhide';
       }else{
        $value='0';
        $publish='Hide';

       }
       ?> 

    <thead>
      <tr>
        <th><?php echo $categories['name'];?></th>
        <th><a href="edit_category.php?id=<?php echo $categories['id'];?>">Edit</a></th>
        <th><a href="controller/hide_category_controller.php?id=<?php echo $categories['id'];?>&&value=<?php echo $value ?>"><?php echo $publish ?></a></th>
        <th><a href="showquestions.php?cid=<?php echo $categories['id'];?>">Questions</a></th>
      </tr>
    </thead>

<?php 
  foreach ($subcategory as $data) {
     # code...

  
 if ($data['category']==$categories['id']) {
        # code...
       if ($data['publish']=='0') {
        $value='1';
        $publish='Unhide';
       }else{
        $value='0';
        $publish='Hide';

       }

     ?> 

    <tbody>
      <tr>
        <td><?php echo $data['name']; ?></td>
        <th><a href="edit_subcategory.php?id=<?php echo $data['id'];?>">Edit</a></th>
        <th><a href="controller/hide_subcategory_controller.php?id=<?php echo $data['id'];?>&&value=<?php echo $value ?>"><?php echo $publish ?></a></th>
        <th><a href="showquestions.php?id=<?php echo $data['id'];?>">Questions</a></th>

      </tr>

     
    </tbody>
  <?php }}} ?>
    


  </table>
</div>



<!-- #######################     CONTENT     ######################## -->
<?php
  include"../header/footer.php"
?>






</body>
</html>