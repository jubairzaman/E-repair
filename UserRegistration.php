<?php
include("dbConnection.php") ;
//checking for empty fields
if(isset($_POST['Submit'])){
if(($_POST['name']== "") || ($_POST['email']== "")|| ($_POST['password']=="")){
$msg= '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>' ;
    
}
else{
    //already registered
    $sql ="SELECT Email FROM userlist_info WHERE Email='".$_POST['email']."' " ;
    $result = $conn->query($sql);
    if($result->num_rows==1)
    {
        $msg= '<div class="alert alert-warning mt-2" role="alert">Email Id Already Registered</div>' ;
        
    }
    else{
        //assigning user values
       $Name= $_POST['name'] ;
       $Email= $_POST['email'] ;
       $Password= $_POST['password'] ;
       $sql= "INSERT INTO userlist_info(Name,Email,Password) values('$Name','$Email','$Password')" ;
           if($conn->query($sql)==TRUE) 
           {
                 $msg= '<div class="alert alert-success mt-2" role="alert">Account Successfully Created</div>' ;
           }
            else
            {
                $msg= '<div class="alert alert-success mt-2" role="alert">Account Successfully not Created</div>' ;
            }
    
    
}
}
}

?>



<!-- Start Registration Section -->
<div class="container pt-5" id="registration">
            <h2 class="text-center">Create an Account</h2>
            <div class="row mt-4 mb-4">
                <div class="col-md-6 offset-md-3">
                    <form action="#" class="shadow-lg p-4" method="POST">
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <label for="name" class="font-weight-bold pl-2"><b>Name</b></label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <label for="email" class="font-weight-bold pl-2"><b>Email</b></label>
                            <input type="email" name="email" class="form-control" placeholder="Email"  >
                            <small class="form-text">Your Email will not be shared with anyone</small>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <label for="password"  class="font-weight-bold pl-2"><b>New Password</b></label>
                            <input type="password" name="password" class="form-control" placeholder="Password" >
                        </div>
                        
                           <input type="submit" value="Submit" class="block btn-danger shadow-sm name="Submit"">
                       <em style="font-sixe:10px;"> Note : By clicking SIGN UP , you agree to our Terms and Data Policy</em>
                        <?php if(isset($msg)) {echo $msg;} ?>

                    </form>
                </div>
            </div>
        </div>
 <!-- End Registration Section -->