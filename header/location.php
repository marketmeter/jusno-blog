<?php
require_once("config.php");
?>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<link href="css/styles.css" rel="stylesheet">
		  <script>
function getdistrict(val) {
	$.ajax({
	type: "POST",
	url: "get_district.php",
	data:'state_id='+val,
	success: function(data){
		$("#district-list").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	
 


<div class="container">


      
 
    	   <form name="insert" action="index.php" method="get">
          <div class="row">
            <div class=".col-sm-2" style="padding: 1px; width: 150px;">
            <select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" >
            <option value="">Select State</option>
            <?php $query =mysqli_query($con,"SELECT * FROM state");
                while($row=mysqli_fetch_array($query))
                { ?>
                    <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
                    <?php
                    }
                    ?>
            </select>
            </div>
<!-- 
            <div class=".col-sm-col-3" style="padding: 4px;">
           <button type="submit" class="btn btn-success">Done</button>
           </div> -->

     <!--  <div class=".col-sm-3" style="padding: 1px;">  
      <div class="form-group"> -->
      <!-- <label for="sel1">Organisation</label> -->
<!--       <select class="form-control" id="sel1" class="organisation">
        <option value=""><a>Organisation</option>
        <option>Jio</option>
        <option>Vodafone</option>
        <option>Idea</option>
      </select>
    </div>
    </div> -->  
    <div class=".col-sm-3" style="padding: 1px;">
           <button type="submit" class="btn btn-success">Done</button>
           </div> 
   </div>
        
        </form>

       </div>
    </div>
 </div>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	