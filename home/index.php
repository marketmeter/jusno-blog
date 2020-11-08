<?php
    session_start();
    include_once '../database.php';
   
   $Sql = "SELECT * FROM category where publish='1'";
  $category = mysqli_query($conn, $Sql);

   $Sql1 = "SELECT * FROM subcategory where publish='1'";
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









<!--============================= CATEGORIES =============================-->
    <section class="main-block">
        <div class="container">
       <?php while($categories = mysqli_fetch_assoc($category)){ ?>

        <h4 align="left" style="color: gray;"><?php echo $categories['name'];?></h4>
                  

            <div class="row">
               <?php foreach ($subcategory as $data) { 
                     if ($data['category']==$categories['id']) {?>
                <div class="col-md-2 category-responsive">
                    <a href="questions.php?id=<?php echo $data['id']; ?>" class="category-wrap">
                        <div class="category-block">
                          <img src="../uploads/<?php echo $data['image']?>" width="60px;" height="60px;">
                             <h6><b><?php echo $data['name']; ?></b></h6>
                        </div> 
                    </a>
                </div>

               
          <?php }} ?>
            </div>
        <?php } ?>

  <hr width="100%" color="#e5e7ef">
   
       
 
        </div>
        </div>
      </div>
    </section>
    <!--
    END CATEGORIES -->
 





<?php
	include"../header/footer.php"
?>






</body>
</html>