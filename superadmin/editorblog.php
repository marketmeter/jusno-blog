<?php
    session_start();
    include_once '../database.php';
    $qid=$_GET['id'];
   echo $Sql = "SELECT questions.*,category.name as category_name,subcategory.name as subcategory_name FROM questions join category on category.id=questions.category join subcategory on subcategory.id=questions.subcategory  where questions.id='$qid'  ";
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




<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
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
        <?php while($row = mysqli_fetch_assoc($questions)){  ?>
  
  <h6><a href="portal.php">Change Category : </a> <?php echo $row['category_name'] ?> </h6>
  <h6><a href="portal.php">Change Sub Category :</a> <?php echo $row['subcategory_name'] ?> </h6>
  <h6><a href="showquestions.php">Change Question :</a> <?php echo $row['title'] ?> </h6>
  <h6>Method Description :  </h6>




    <h5>Add method</h5>
  <form action="controller/add_answer_controller.php" method="POST">
    <input type="hidden" value="<?php echo $row['category'] ?>" name="category">
    <input type="hidden" value="<?php echo $row['subcategory'] ?>" name="subcategory">
    <input type="hidden" value="<?php echo $row['id'] ?>" name="question">
<?php } ?>


    <div class="form-group">
          <div class="form-group">
            <!-- <label for="usr">Name:</label> -->
            <input type="text" class="form-control" name="heading" id="headline" placeholder="Headline ">
        </div>
        <!-- (or) -->
       <br>
         <div class="form-group">
            <!-- <label for="usr">Name:</label> -->
            <input type="text" class="form-control" id="" name="type" placeholder="method type">
        </div>
        <!-- (or) -->
       <br>
        <!-- <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Name</span>
        </div>
        <input type="text" class="form-control">
      </div> -->

         <textarea id='long_desc' name='long_desc' ></textarea>

      <!-- <input type="text" class="form-control" id="headline" placeholder="Headline "> -->
        <!-- <label for="sel1">Select list (select one)</label>
          <select class="form-control" id="sel1" name="sellist1">
            <option>State</option>
            <option>Banking</option>
            <option>Smuggling</option>
            <option>Police</option>
          </select> -->
<!--        
        <br>
         <input type="text" class="form-control" id="specific" placeholder="Mention Organisation">
         <br> -->

<!--      <select class="form-control" id="steps" name="steps">
          <option>Step 1</option>
          <option>Step 2</option>
          <option>Step 3</option>
          <option>Step 4</option>
          <option>Step 5</option>
          <option>Step 6</option>
          <option>Step 7</option>
          <option>Step 8</option>

          
        </select> -->



       <label for="sel2">Visibility</label>
        <select class="form-control" id="sel2" name="publish">
          <option class="disable">Visibility</option>
          <option value="0">Hide</option>
          <option value="1">Show</option>         
        </select>


    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>


 
</div>



<!-- #######################     CONTENT     ######################## -->
<?php
  include"../header/footer.php"
?>






</body>
 <script>
        ClassicEditor
            .create( document.querySelector( '#long_desc' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</html>