<?php
define('TITLE','User Login') ;
include('../dbConnection.php') ;


session_start() ;
if(!isset($_SESSION['is_login'])){
if(isset($_POST['uEmail'])){
$uemail = mysqli_real_escape_string($conn,trim($_POST['uEmail'])) ;
$upassword= mysqli_real_escape_string($conn,trim($_POST['uPassword'])) ;
$sql= "SELECT Email,Password FROM userlist_info WHERE Email= '".$uemail."' AND Password='".$upassword."' limit 1 " ;
$result= $conn->query($sql) ;
if($result->num_rows==1){
    $_SESSION['is_login'] = true ;
    $_SESSION['uEmail'] = $uemail ;

   echo "<script>location.href='UserProfile.php';</script>" ;
    exit() ;
}
else{
    $msg =  '<div class="alert alert-warning mt-2">Enter Valid Email and Password </div>' ;
}
}
}else{
       echo "<script>location.href='UserProfile.php';</script>" ;
}

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatoble" content="ie=edge">
                <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        
        <! -- Font Awesome CSS -->
        <link rel="stylesheet" href="../CSS/all.min.css">
        
        
        <title>Login</title>
        </head>
    <body>
        <div class="mb-3 mt-5 text-center" style="font-size:30px;">
            <i class="fas fa-stethoscope"></i>
            <span>Repairaing Service Maintenance</span>
        </div>
        <p class="text-center" style="font-size:20px;"><i class="fas fa-user-secret text-danger"></i>User Area(Demo)</p>
        <div class="container-fluid">
            <div class="row justify-content-center mt-5">
                <div class="col-sm-6 col-md-4">
                    <form action="" class="shadow-lg p-4" method="POST">
                        <div class="form-group">
                           <i class="fas fa-user"></i> <label for="Email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="uEmail">
                           <small class="form-text">Your Email will not be shared with anyone</small>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Password</label><input type="password" class="form-control" placeholder="Password" name="uPassword">
                        </div>
                        <input type="submit" value="Login" class="block btn-danger shadow-sm mt-3 ">
                        
                        <?php
                        if(isset($msg))
                        {
                            echo $msg ;
                        } 
                        ?>
                    </form>
                    <div class="text-center">
                        <a href="../index.php" class="btn btn-info mt-3 shadow-sm">Back To Home</a>
                    </div>>
                </div>
            </div>
        </div>
        
        <!-- JavaScript -->
        <script src="../JS/jquery.min.js"></script>
        <script src="../JS/popper1.min.js"></script>
        <script src="../JS/bootstrap.min.js"></script>
        <script src="../JS/all.min.js"></script>
        </body>
</html>