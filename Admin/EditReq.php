<?php
define('TITLE','Requester') ;
define('PAGE','EditReq') ;
include('includes/header.php') ;
include('../dbConnection.php') ;


session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
?>

     <div class="col-sm-9 mt-6 mx-5" style="background-color :#D0D0D0;" >
      <h3 class="text-center text-white p-2">Update User Details</h3>
    <?php
    if(isset($_REQUEST['edit'])){
        $sql = "SELECT * FROM userlist_info WHERE Id={$_REQUEST['id']}";
        $result = $conn->query($sql) ;
        $row=$result->fetch_assoc();
    }
        if(isset($_REQUEST['update'])){
    if($_REQUEST['Id'] == "" || $_REQUEST['Name'] == "" || $_REQUEST['Email'] == ""){
               $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">All Fields Are Required</div>'  ; 
    }else{
               $uid = $_REQUEST['Id'] ; 
                $uname = $_REQUEST['Name'] ; 
                 $uemail = $_REQUEST['Email'] ; 
        $sql = "UPDATE userlist_info SET Id='$uid' , Name='$uname'  ,Email='$uemail'  WHERE Id='$uid'" ;
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
         <form>
        <div class="form-group">
            <label for="Id">User Id</label>
            <input type="text" class="form-control" id="Id" placeholder="User Id" name="Id" value="<?php if(isset($row['Id'])){echo $row['Id'];}?>">
        </div>
        <div class="form-group">
            <label for="Name">User Name</label>
            <input type="text" class="form-control" id="Name" placeholder="User Name" name="Name" value="<?php if(isset($row['Name'])){echo $row['Name'];}?>">
        </div>
        <div class="form-group">
            <label for="Email">User Email</label>
            <input type="text" class="form-control" id="Email" placeholder="User Email" name="Email" value="<?php if(isset($row['Email'])){echo $row['Email'];}?>">
        </div>
            <div class="text-center">
            <input type="submit" value="Update" name="update" class="btn btn-success shadow-sm mt-3 ">
                <a href="Requester.php" class="btn btn-secondary">Close</a>
            </div>
          </form>
         <?php
        if(isset($msg))
        {
            echo $msg ;
        } 
        ?>
     </div>

<?php
include('includes/footer.php') ;
?>