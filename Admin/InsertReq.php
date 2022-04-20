<?php
define('TITLE','InsertReq') ;
define('PAGE','InsertReq') ;
include('includes/header.php') ;
include('../dbConnection.php') ;


session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
if(isset($_POST['submit'])){
if(($_POST['Name']== "") || ($_POST['Email']== "")|| ($_POST['Password']=="")){
$msg= '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>' ;
    
}else{
           $Name= $_POST['Name'] ;
       $Email= $_POST['Email'] ;
       $Password= $_POST['Password'] ;
       $sql= "INSERT INTO userlist_info(Name,Email,Password) values('$Name','$Email','$Password')" ;
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
        <h5 class="text-center">Add New Requesters</h5>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="Name" >
        </div>
        <div class="form-group">
             <label for="Email">Email</label>
            <input type="text" class="form-control" id="Name" name="Email"> 
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="Password" name="Password">
        </div>
        <div class="text-center">
        <input type="submit" value="Submit" name="submit" class="btn btn-success shadow-sm mt-3 ">
        <a href="Requester.php" class="btn btn-secondary">Close</a>
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