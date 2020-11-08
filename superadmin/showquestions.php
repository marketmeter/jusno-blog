<?php
    session_start();
    include_once '../database.php';
   if (isset($_GET['cid'])) {
    $cid=$_GET['cid'];
    $data='category';
   }else{
       $cid=$_GET['id'];
           $data='subcategory';

}
    $Sql = "SELECT * FROM questions where ".$data."='$cid'  ";
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

<!-- #######################     CONTENT     ######################## -->


<div class="container">
 <br>
 
 <div class="row">
 <div class=".col-sm-2" style="padding: 2px;"><a type="button" class="btn btn-secondary" href="addquestion.php">Add Quesions</a></div>
  <!-- <div class=".col-sm-2" style="padding: 2px;"><a type="button" class="btn btn-success" href="subcategory.php">Methods</a></div> -->
   
<div class=".col-sm-4" style="padding: 1px; width: 150px;">
    <form name="insert" action="index.php" method="get">
         
            
            <select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" >
            <option value="">Select State</option>
                <option value="1">Andaman and Nicobar Island (UT)</option>
                        <option value="2">Andhra Pradesh</option>
                        <option value="3">Arunachal Pradesh</option>
                        <option value="4">Assam</option>
                        <option value="5">Bihar</option>
                        <option value="6">Chandigarh (UT)</option>
                        <option value="7">Chhattisgarh</option>
                        <option value="8">Dadra and Nagar Haveli (UT)</option>
                        <option value="9">Daman and Diu (UT)</option>
                        <option value="10">Delhi (NCT)</option>
                        <option value="11">Goa</option>
                        <option value="12">Gujarat</option>
                        <option value="13">Haryana</option>
                        <option value="14">Himachal Pradesh</option>
                        <option value="15">Jammu and Kashmir</option>
                        <option value="16">Jharkhand</option>
                        <option value="17">Karnataka</option>
                        <option value="18">Kerala</option>
                        <option value="19">Lakshadweep (UT)</option>
                        <option value="20">Madhya Pradesh</option>
                        <option value="21">Maharashtra</option>
                        <option value="22">Manipur</option>
                        <option value="23">Meghalaya</option>
                        <option value="24">Mizoram</option>
                        <option value="25">Nagaland</option>
                        <option value="26">Odisha</option>
                        <option value="27">Puducherry (UT)</option>
                        <option value="28">Punjab</option>
                        <option value="29">Rajastha</option>
                        <option value="30">Sikkim</option>
                        <option value="31">Tamil Nadu</option>
                        <option value="32">Telangana</option>
                        <option value="33">Tripura</option>
                        <option value="34">Uttarakhand</option>
                        <option value="35">Uttar Pradesh</option>
                        <option value="36">West Bengal</option>
                </select>
              </div>
               <div class=".col-sm-4" style="padding: 1px;">
           <button type="submit" class="btn btn-success">Done</button>
           </div> 

        </form>
</div>

<h6 align="center" style="color: red;">Tamilnadu</h6>
  <table class="table table-srtiped">
        <?php while($row = mysqli_fetch_assoc($questions)){  
          if ($row['publish']=='0') {
        $value='1';
        $publish='Unhide';
       }else{
        $value='0';
        $publish='Hide';

       }
          ?> 
    
    <thead>
      <tr>
        <th><?php echo $row['title'] ?></th>
        <th><a href="edit_question.php?id=<?php echo $row['id'] ?>">Edit Question</a></th>
        <th><a href="controller/hide_questions_controller.php?id=<?php echo $row['id'];?>&&value=<?php echo $value ?>"><?php echo $publish; ?></a></th>
        <th><a href="addmethods.php?id=<?php echo $row['id'];?>">Add Methods</a></th>
      </tr>
    </thead>
  <?php } ?>

    

    

  </table>
</div>



<!-- #######################     CONTENT     ######################## -->
<?php
  include"../header/footer.php"
?>






</body>
</html>