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
<div class="col">
  <h2>Add Sub Category</h2>

  <form action="https://www.w3schools.com/action_page.php">
    <div class="form-group">
      <label for="sel1">Select Category (select one):</label>
      <select class="form-control" id="sel1" name="sellist1">
        <option>common</option>
        <option>Banking</option>
        <option>Smuggling</option>
        <option>Police</option>
      </select>
       <br>
	      <div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <span class="input-group-text">Name</span>
		    </div>
		    <input type="text" class="form-control">
		  </div>

			 <div class="form-group">
		     <textarea class="form-control" rows="5" id="comment" placeholder="Add Description"></textarea>
		    </div>

		    <div class="custom-file mt-3 mb-3">
				  <input type="file" class="custom-file-input" id="customFile">
				  <label class="custom-file-label" for="customFile">Select Image</label>
				</div>

	     <label for="sel2">Visibility</label>
	      <select class="form-control" id="sel2" name="sellist1">
	        <option>Hide</option>
	        <option>Show</option>	        
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