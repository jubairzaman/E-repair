<?php
define('TITLE','Add Products') ;
define('PAGE','AddProduct') ;
include('includes/header.php') ;
include('../dbConnection.php') ;


session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}

if(isset($_POST['submit'])){
if(($_POST['pname']== "") || ($_POST['paval']=="")|| ($_POST['ptotal']=="") || ($_POST['poriginalcost']== "") || ($_POST['psellingcost']== "")){
$msg= '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>' ;
    
}else{
       
       $pname= $_POST['pname'] ;
       $paval= $_POST['paval'] ;
       $ptotal= $_POST['ptotal'] ;
       $poriginalcost= $_POST['poriginalcost'] ;
       $psellingcost= $_POST['psellingcost'] ;


       $sql= "INSERT INTO asset_list(pname,paval,ptotal,poriginalcost,psellingcost) values('$pname','$paval','$ptotal','$poriginalcost','$psellingcost')" ;
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
<div class="col-sm-5 mt-5" style="background-color :#D0D0D0 ;"> 
    <form class="mx-5" action="" method="post">
        <h5 class="text-center">Add New Products</h5>
        <div class="form-group">
            <label for="pname">Name</label>
            <input type="text" class="form-control" id="pname" name="pname" >
        </div>
        <div class="form-group">
            <label for="paval">Available</label>
            <input type="paval" class="form-control" id="paval" name="paval">
        </div>
        <div class="form-group">
            <label for="ptotal">Total</label>
            <input type="ptotal" class="form-control" id="ptotal" name="ptotal">
        </div>
        <div class="form-group">
             <label for="poriginalcost">Original Cost(Each)</label>
            <input type="text" class="form-control" id="poriginalcost" name="poriginalcost"> 
        </div>
        <div class="form-group">
             <label for="psellingcost">Selling Cost(Each)</label>
            <input type="text" class="form-control" id="psellingcost" name="psellingcost"> 
        </div>

        <div class="text-center">
        <input type="submit" value="Submit" name="submit" class="btn btn-success shadow-sm mt-3 ">
        <a href="Assets.php" class="btn btn-secondary">Close</a>
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