<?php
define('TITLE','Update Technicians') ;
define('PAGE','EditEmp') ;
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
        $sql = "SELECT * FROM technician_list WHERE empid={$_REQUEST['id']}";
        $result = $conn->query($sql) ;
        $row=$result->fetch_assoc();
    }

            if(isset($_REQUEST['update'])){
if(($_REQUEST['empName']== "") || ($_REQUEST['empCity']=="")|| ($_REQUEST['empMobile']=="") || ($_REQUEST['empEmail']== "")){
               $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">All Fields Are Required</div>'  ; 
    }else{
       $id=$_REQUEST['empid'] ;
       $Name=$_REQUEST['empName'] ;
       $City= $_REQUEST['empCity'] ;
       $Mobile= $_REQUEST['empMobile'] ;
       $Email= $_REQUEST['empEmail'] ;

        $sql = "UPDATE technician_list SET empid='$id' , empName='$Name',empCity='$City' ,empMobile='$Mobile', empEmail='$Email'  WHERE empid='$id'" ;
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
            <label for="empid">Emp Id</label>
            <input type="text" class="form-control" id="Id" name="empid" value="<?php if(isset($row['empid'])){echo $row['empid'];}?>">
        </div>
        <div class="form-group">
            <label for="empName"> Name</label>
            <input type="text" class="form-control" id="empName" name="empName" value="<?php if(isset($row['empName'])){echo $row['empName'];}?>">
        </div>
             <div class="form-group">
            <label for="empCity">City</label>
            <input type="text" class="form-control" id="empCity" name="empCity" value="<?php if(isset($row['empCity'])){echo $row['empCity'];}?>">
        </div>
             <div class="form-group">
            <label for="empMobile">Mobile</label>
            <input type="text" class="form-control" id="empName" name="empMobile" value="<?php if(isset($row['empMobile'])){echo $row['empMobile'];}?>">
        </div>
        <div class="form-group">
            <label for="empEmail"> Email</label>
            <input type="text" class="form-control" id="empEmail" name="empEmail" value="<?php if(isset($row['empEmail'])){echo $row['empEmail'];}?>">
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