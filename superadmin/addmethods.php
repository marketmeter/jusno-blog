
<?php
    session_start();
    include_once '../database.php';
    $id=$_GET['id'];
    $Sql = "SELECT answers.*,questions.title as question_title FROM answers join questions on questions.id=answers.questions  where answers.questions='$id'  ";
    $answers = mysqli_query($conn, $Sql);

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

<div class="row">
<div class="col" style="padding: 2px;"><a type="button" class="btn btn-secondary" href="portal.php">Home</a></div>
<div class="col" style="padding: 2px;"><a type="button" class="btn btn-secondary" href="showquestions.php">Questions</a></div>
<div class="col" style="padding: 2px;"><a type="button" class="btn btn-secondary" href="editorblog.php?id=<?php echo $id;?>">Add Methods</a></div>
</div>
<br>

  <div class="row">
    <div class="col">
    </div>
<div class="col-md-8">
  
  <table class="table table-srtiped">
    <thead>
      <tr>
        <th>Method</th>
        <th>Description</th>
        <th>Coverage</th>
        <th>Hide/Show</th>
        <th>Edit</th>        
        <th>View</th>  
      </tr>
    </thead>

    

    <tbody>
        <?php while($row = mysqli_fetch_assoc($answers)){
         if ($row['publish']=='0') {
        $value='1';
        $publish='Unhide';
       }else{
        $value='0';
        $publish='Hide';

       }  ?> 

      
      <tr>
        <th><?php echo $row['id'] ?></th>
        <th><?php echo $row['heading'] ?></th>
        <th><?php echo $row['question_title'] ?></th>
        <th><a href="controller/hide_answer_controller.php?id=<?php echo $row['id'];?>&&value=<?php echo $value ?>"><?php echo $publish ?></a></th>
        <th><a href="edit_answer.php?id=<?php echo $row['id'];?>">Edit</a></th>  
        <th><a href="#">View</a></th>      
      </tr>

    <?php } ?>

    </tbody>
  </table>

</div>



		  <div class="col"></div>
  </div>
</div>



<!-- #######################     CONTENT     ######################## -->
<?php
  include"../header/footer.php"
?>






</body>
</html>