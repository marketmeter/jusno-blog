<?php
    session_start();
    include_once '../database.php';
   
   $Sql = "SELECT * FROM category";
  $category = mysqli_query($conn, $Sql);
  $Sql1 = "SELECT * FROM subcategory";
  $subcategory = mysqli_query($conn, $Sql1);
    
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
		<div class="col">
		</div>
<div class=".col-sm-2" style="padding: 2px;"><a type="button" class="btn btn-secondary" href="portal.php">Home</a></div>
<div class=".col-sm-2" style="padding: 2px;"><a type="button" class="btn btn-secondary" href="showquestions.php">Questions</a></div>

<div class="col-md-8">
  <h2>Add Question</h2>

  <form action="controller/add_questions_controller.php" method="post">
    <div class="form-group">
          <div class="form-group">
            <label for="sel1">Select Category (select one):</label>
      <select class="form-control" id="sel1" name="category">
        <?php while($row = mysqli_fetch_assoc($category)){  ?> 
        <option value="<?php echo $row['id']  ?>"><?php echo $row['name'];?></option>
        <?php }?>
      </select>
       <br><label for="sel1">Select Category (select one):</label>
      <select class="form-control" id="sel1" name="subcategory">
        <?php while($row = mysqli_fetch_assoc($subcategory)){  ?> 
        <option value="<?php echo $row['id']  ?>"><?php echo $row['name'];?></option>
        <?php }?>
      </select>
       <br>
            <!-- <label for="usr">Name:</label> -->
            <input type="text" class="form-control" id="headline" name="heading" placeholder="Headline ">
        </div>
        <!-- (or) -->
       <br>
	      <!-- <div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <span class="input-group-text">Name</span>
		    </div>
		    <input type="text" class="form-control">
		  </div> -->

			 <div class="form-group">
		     <textarea class="form-control" rows="5" id="comment" name="description" placeholder="Add Description"></textarea>
		    </div>

<!-- 				
				<br>
		     <input type="text" class="form-control" id="specific" placeholder="Mention Organisation">
		     <br> -->

		<select multiple="" name="location" class="form-control" id="sel2">
                       	<option value="99">All</option>
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


	     <label for="sel2">Visibility</label>
	      <select class="form-control" name="publish" id="sel2" >
	        <option class="desable">Visibility</option>
	        <option value="0">Hide</option>
	        <option value="1">Show</option>	        
	      </select>


    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
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