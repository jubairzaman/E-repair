<?php
define('TITLE','Update Technicians') ;
define('PAGE','InsertEmp') ;
include('includes/header.php') ;
include('../dbConnection.php') ;


session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
if(isset($_POST['submit'])){
if(($_POST['empName']== "") || ($_POST['empCity']=="")|| ($_POST['empMobile']=="") || ($_POST['empEmail']== "")){
$msg= '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>' ;
    
}else{
       $Name= $_POST['empName'] ;
       $City= $_POST['empCity'] ;
       $Mobile= $_POST['empMobile'] ;
       $Email= $_POST['empEmail'] ;

       $sql= "INSERT INTO technician_list(empName,empCity,empMobile,empEmail) values('$Name','$City','$Mobile','$Email')" ;
           if($conn->query($sql)==TRUE) 
           {
                 $msg= '<div class="alert alert-success mt-2" role="alert">Added Successfully</div>' ;
           }
            else
            {
                $msg= '<div class="alert alert-success mt-2" role="alert">Unable to Add</div>' ;
            }
}
}
?>

<!--2nd column start -->
<div class="col-sm-5 mt-5" style="background-color :#D0D0D0 ;"> <!-- Start 3rd Column -->
    <form class="mx-5" action="" method="post">
        <h5 class="text-center">Add New Technicians</h5>
        <div class="form-group">
            <label for="empName">Name</label>
            <input type="text" class="form-control" id="empName" name="empName" >
        </div>
        <div class="form-group">
            <label for="empCity">City</label>
            <input type="empCity" class="form-control" id="empCity" name="empCity">
        </div>
        <div class="form-group">
            <label for="empMobile">Mobile</label>
            <input type="empMobile" class="form-control" id="empMobile" name="empMobile">
        </div>
        <div class="form-group">
             <label for="empEmail">Email</label>
            <input type="text" class="form-control" id="empEmail" name="empEmail"> 
        </div>

        <div class="text-center">
        <input type="submit" value="Submit" name="submit" class="btn btn-success shadow-sm mt-3 ">
        <a href="Technician.php" class="btn btn-secondary">Close</a>
        </div>
             <?php
        if(isset($msg))
        {
            echo $msg ;
        } 
        ?>
    </form>
</div>
<!--2nd column end -->

<?php
include('includes/footer.php') ;
?>