
<!-- ################### desktop #################### -->
<!-- <div class="navbar hidden-tablet hidden-phone"> -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="../home/index.php"><img src="https://trello-attachments.s3.amazonaws.com/5c0291b8ee9249253a807fb5/5fa27fde6f89b1445c4a0d8c/01e34623367710a5f9abb3c3a1fda7bf/jusn.png" width="80px;" height="20px;"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      
       <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size: 15px; color: white;">
        Language
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Kannada</a>
        <a class="dropdown-item" href="#">Tamil</a>
        <a class="dropdown-item" href="#">English</a>
        <a class="dropdown-item" href="#">Malayalam</a>
        <a class="dropdown-item" href="#">Telugu</a>
        <a class="dropdown-item" href="#">Marati</a>
        <a class="dropdown-item" href="#">Auto</a>
      </div>
    </li>
      <!-- ################ -->

    
  <!--   <li class="nav-item">
      <a class="nav-link" href="#" style="font-size: 15px; color: white;" data-toggle="modal" data-target="#myModal">
        Location
      </a>
    </li> -->


    <li class="nav-item">
      <a class="nav-link" href="../blog/index.php" style="font-size: 15px; color: white;">
        Blogs
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="#" style="font-size: 15px; color: white;">
       Technology
      </a>
    </li>
    </ul>


    <form class="form-inline my-2 my-md-0">
      <input class="form-control mr-sm-2" type="text" name="search">
      <button class="btn btn-success my-2 my-smd-0" type="button" >Search</button>
    </form>
  
  <!-- <ul> -->
    <h6 class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size: 15px; color: white;">
        Admin
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../supadmin/portal.php">Profile</a>
        <a class="dropdown-item" href="#">Dashboard</a>
        <a class="dropdown-item" href="#">Settings</a><hr>
        <a class="dropdown-item" href="#">Logout</a>

      </div>
    </h6>
  <!-- </ul> -->

  </div>
</div>
</nav>
<!-- </div> -->
<!-- ################### desktop #################### -->

<!-- ################## MOBILE ##################### -->

    <header class="header-basic-light" style="padding-top: 2px;">
        <div class="header-limiter">

          <!-- <form> -->
          
          <!-- </form> -->
            <div class="container" style="padding-bottom: 8px;">
            
              <img src="https://trello-attachments.s3.amazonaws.com/5c0291b8ee9249253a807fb5/5fa27fde6f89b1445c4a0d8c/01e34623367710a5f9abb3c3a1fda7bf/jusn.png" width="90" height="30;" align="left" style="padding-top: 6px;">
              <form style="text-align: right;">
              <input type="text" name="search" class="search">
              </form>
            </div>

              <nav>
                <a class="nav-link" href="#" style="font-size: 15px; color: white;" data-toggle="modal" data-target="#Language">
                  Language</a>

          <!--        <a class="nav-link" href="#" style="font-size: 15px; color: white;" data-toggle="modal" data-target="#myModal">
                  Location</a>
 -->
                   <!-- Button to Open the Modal -->


                 <a class="nav-link" href="blog/index.php" style="font-size: 15px; color: white;">Blog</a>


                <a class="nav-link" href="#" style="font-size: 15px; color: white;">Technology</a>
                <!-- <a href="../newsfeed/contact-us.php"><h6><strong>ContactUs</strong></h6></a> -->
                
                 <!-- <li class="nav-item dropdown"> -->
                  <!-- <div> -->
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown"><strong>Admin</strong>
                  <div class="dropdown-menu" style="width: 50px;">
                    <a class="dropdown-item" href="#" style="color: black;"><h6>Profile</h6></a>
                    <a class="dropdown-item" href="#" style="color: black;"><h6>Settings</h6></a>
                    <a class="dropdown-item" href="#" style="color: black;"><h6>Terms & Consitions</h6></a> <hr>                   
                    <a class="dropdown-item" href="#" style="color: black; padding-top: 0px;"><h6>Logout</h6></a>
                  </div>
                </a>

                  <!-- </div> -->
                <!-- </li> -->

            </nav>
        </div>
    </header>

<style type="text/css">
 
 .search{
  width: 30px;
  box-sizing: border-box;
  border: 2px solid #fff;
  border-radius: 8px;
  font-size: 16px;
  background-color: white;
  background-image: url('../../jusnonew/icons/search.png');
  background-position: 3px 4px; 
  background-repeat: no-repeat;
  padding: 1px 10px px 28px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

.search:focus {
  width: 60%;
}

    .header-basic-light{
    padding: 20px 40px;
    box-sizing:border-box;
    box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.15);
    height: 80px;
    background-color: #212529;
}

.header-basic-light .header-limiter {
    max-width: 1200px;
    text-align: center;
    margin: 0 auto;
}

/* Logo */

.header-basic-light .header-limiter h1{
    float: left;    
    font:28px Cookie, sans-serif;
    line-height: 40px;
    margin: 0;

}

.header-basic-light .header-limiter h1 span {
    color: #c6c6c6;
}
 
/* The header links */

.header-basic-light .header-limiter a {
    color: #fff;
    text-decoration: none;
}

.header-basic-light .header-limiter nav{
    font:18px Arial, Helvetica, sans-serif;
    line-height: 40px;
    float: right;
}

.header-basic-light .header-limiter nav a{
    display: inline-block;
    padding: 0 5px;
    opacity: 0.9;
    text-decoration:none;
    color: #ffffff;
    line-height:1;
  }

  /* unvisited link */
.header-basic-light .header-limiter nav a:link{
  color: #FFFFFF;
}

/* visited link */
.header-basic-light .header-limiter nav a:visited{
  color: #fff;
}

/* mouse over link */
.header-basic-light .header-limiter nav a:hover{
  color: #FFF;
}

/* selected link */
.header-basic-light .header-limiter nav a:active{
  color: white;
} 

.header-basic-light .header-limiter nav a.selected {
    background-color: #ff2b06;
    color: #FFFFFF;
    border-radius: 3px;
    border-style: double;
    padding:6px 10px;
 
}

@media only screen and (min-width: 670px) {
  .footer { 
   position: fixed;  
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #ff2b06;
   color: white;
   text-align: center;
   line-height: 20px;   
   overflow: auto;
}
}
 

/* Making the header responsive. */

@media all and (max-width: 670px) {

    .header-basic-light {
        padding: 20px 0;
        height: 80px;
    }

    .header-basic-light .header-limiter h1 {
        float: none;
        margin: -8px 0 10px;
        text-align: center;
        font-size: 24px;
        line-height: 1;
    }

    .header-basic-light .header-limiter nav {
        line-height: 1;
        float:none;
    }

    .header-basic-light .header-limiter nav a {
        font-size: 13px;
    }
}


body {
    margin:0;
    padding:0;
    /*line-height: 0px;*/
}


</style>
<!-- #################### MOBILE #####################  -->

<style type="text/css">
  @media (max-width: 991px) { 
    .navbar{
        display:none;
    }
}


  @media (min-width: 990px) { 
    .header-basic-light{
        display:none;
    }
}

</style>
    <!--============================= Content starts =============================-->
        





     <!--============================= Content End =============================-->


<!-- #################   Location PopUp  #################### -->

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-size: 15px;">Choose Location for better experience</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
              <?php

                include 'location.php';

              ?>
        
        <!-- Modal footer -->


        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" data-dismiss="modal">Submit</button>
        </div>
        
      </div>
    </div>
  </div>


<!-- ####################### LANGUAGE POPUP  ######################## -->

<!-- The Modal -->
  <div class="modal fade" id="Language">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-size: 15px;">Select Language</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
        
        <!-- Modal body -->
        
          <section class="main-block" style="padding-top: 5px;">
        <div class="container">
   
        <!-- <h4 align="left" style="color: gray;">Language</h4> -->
            <div class="row">
                <div class="col-md-2 category-responsive">
                    <a href="category.html" class="category-wrap">
                        <div class="category-block">
                          <img src="icons/jusno.png" width="60px;" height="60px;">
                             <h6><b>English</b></h6>
                        </div> 
                    </a>
                </div>


                <div class="col-md-2 category-responsive">
                    <a href="#" class="category-wrap">
                        <div class="category-block">
                          <img src="icons/election.png" width="60px;" height="60px;">
                             <h6><b>Kannada</b></h6>
                        </div> 
                    </a>
                </div>


                <div class="col-md-2 category-responsive">
                    <a href="#" class="category-wrap">
                        <div class="category-block">
                          <img src="icons/bus.svg" width="60px;" height="60px;">
                             <h6><b>Tamil</b></h6>
                        </div> 
                    </a>
                </div>
        
                <div class="col-md-2 category-responsive">
                    <a href="#" class="category-wrap">
                        <div class="category-block">
                          <img src="icons/atm.svg" width="60px;" height="60px;">
                             <h6><b>Malayalam</b></h6>
                        </div> 
                    </a>
                </div>            
           
              <div class="col-md-2 category-responsive">
                    <a href="#" class="category-wrap">
                        <div class="category-block">
                          <img src="icons/forest.svg" width="60px;" height="60px;">
                             <h6><b>Telugu</b></h6>
                        </div> 
                    </a>
                </div>
            </div>

          </div>
        </section>

        <!-- Modal footer -->
        <div class="modal-footer">
          <!-- <button type="submit" class="btn btn-secondary" data-dismiss="modal">Submit</button> -->
        </div>
        
      </div>
    </div>
  </div>


<style type="text/css">


  
/* Making the header responsive. */

@media all and (max-width: 670px) {

    .header-basic-light {
        padding: 20px 0;
        height: 80px;
    }

    .header-basic-light .header-limiter h1 {
        float: none;
        margin: -8px 0 10px;
        text-align: center;
        font-size: 24px;
        line-height: 1;
    }

    .header-basic-light .header-limiter nav {
        line-height: 1;
        float:none;
    }

    .header-basic-light .header-limiter nav a {
        font-size: 13px;
    }
}
body {
    margin:0;
    padding:0;

}
 


</style>
 
</body>

</html>