<?php
define('TITLE','Change Password') ;
define('PAGE','ChangePass') ;
include('../dbConnection.php') ;
include('includes/header.php') ;
include('../dbConnection.php') ;
session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
$aemail =  $_SESSION['aEmail']  ;
if(isset($_POST['updatepw'])){
    if($_POST['inputnewpassword'] == ""){
               $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">All Fields Are Required</div>'  ; 
    }else{
               $apassword = $_POST['inputnewpassword'] ; //updated new password 
        $sql = "UPDATE admin_login SET a_password='$apassword' WHERE a_email='$aemail'" ;
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
 <div class="col-sm-9 md-10"> <!-- start admin change password form 2nd column -->
                    <form action="" method="POST" class="mx-5">
                        <div class="form-group">
                            <label for="aemail">Email</label><input type="email" class="form-control"  name="aemail" id="aemail" value="<?php echo $aemail ;?>" readonly >
                            </div>
                        <div class="form-group">
                             <label for="inputnewpassword">New Password</label><input type="text" name="inputnewpassword" class="form-control"  id="inputnewpassword" placeholder="New Password">
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
                </div>  <!-- End admin change password form 2nd column -->


<?php
include('includes/footer.php') ;
?>