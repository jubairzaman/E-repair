<?php
define('TITLE','User Profile Update') ;
define('PAGE','UserChangePW') ;
include('Includes/Header.php') ;
include('../dbConnection.php') ;


session_start() ;
//Start Show Name and email
if(isset($_SESSION['is_login'])){
    $uemail =  $_SESSION['uEmail']  ;
}
else{
    echo "<script> location.href='UserLogin.php'</script>" ;//redirect login page
}
 $uemail =  $_SESSION['uEmail']  ;
if(isset($_POST['updatepw'])){
    if($_POST['inputnewpassword'] == ""){
               $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">All Fields Are Required</div>'  ; 
    }else{
               $upw = $_POST['inputnewpassword'] ; //updated new password 
        $sql = "UPDATE userlist_info SET Password='$upw' WHERE Email='$uemail'" ;
        if($conn->query($sql)== TRUE)
        {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Successfully Updated</div>' ;
        }
        else{
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>' ;
        }
    
    }
}
    ?>

                <div class="col-sm-6 mt-5"> <!-- start user change password form 2nd column -->
                    <form action="" method="POST" class="mx-5">
                        <div class="form-group">
                            <label for="inputEmail">Email</label><input type="email" class="form-control"  name="uemail" id="uemail" value="<?php echo $uemail ;?>" readonly >
                            </div>
                        <div class="form-group">
                             <label for="inputnewpassword">Name</label><input type="text" name="inputnewpassword" class="form-control"  id="inputnewpassword" placeholder="New Password">
                        </div>
                        <input type="submit" value="Update" name="updatepw" class="btn btn-danger shadow-sm mt-3 ">
                        <input type="reset" value="Reset" name="resetpw" class="btn btn-secondary shadow-sm mt-3 ">
                        

                    </form>
                    <?php
        if(isset($msg))
        {
            echo $msg ;
        } 
        ?>
                </div>  <!-- End user change password form 2nd column -->


<?php
include('Includes/Footer.php') ;
    ?>