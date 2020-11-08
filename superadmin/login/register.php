<?php
   include_once '../../database.php';
    $Sql = "SELECT name, id FROM markets";
    $markets = mysqli_query($conn, $Sql);

if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $market=$_POST['market'];



    $query=mysqli_query($conn,"SELECT * FROM admin WHERE username='".$user."'");
    $numrows=mysqli_num_rows($query);
    if($numrows==0)
    {
    $sql="INSERT INTO admin(username,password,market_id,flag) VALUES('$user','$pass',$market,0)";

    $result=mysqli_query($conn,$sql);
         session_start();
    $_SESSION['sess_user']=$user;


    if($result){
   
        echo "added successfully";
        header('Location: ../login/login.php');
    } else {
    echo "Failure!";
    }

    } else {
    echo "That username already exists! Please try again with another.";
    }

} else {
    echo "All fields are required!";
}
}
?>
<!doctype html>
<html lang="en">
 <?php include_once '../views/header.php' ?>

<body>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">User Name:</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="user" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="pass" required>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="select" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                         <select name="market" class="form-control">
                                            <?php while($row = mysqli_fetch_assoc($markets)){ ?>
                                            market
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name='submit' class="btn btn-primary">
                                    Login
                                </button>
                                <a href="#" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
</body>
<style type="text/css">
    
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


body{
    margin: 0;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    text-align: left;
    background-color: #f5f8fa;
}

.navbar-laravel
{
    box-shadow: 0 2px 4px rgba(0,0,0,.04);
}

.navbar-brand , .nav-link, .my-form, .login-form
{
    font-family: Raleway, sans-serif;
}

.my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}
</style>




</body>
</html>