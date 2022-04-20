<?php
define('TITLE','Update Products') ;
define('PAGE','EditProduct') ;
include('includes/header.php') ;
include('../dbConnection.php') ;


session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
?>
<!--2nd column start -->
<div class="col-sm-5 mt-5" style="background-color :#D0D0D0 ;"> 
    <form class="mx-5" action="EditProduct.php" method="post">
        <h5 class="text-center">Update Products Details</h5>
        
            <?php
    if(isset($_REQUEST['edit'])){
        $sql = "SELECT * FROM asset_list WHERE pid={$_REQUEST['pid']}";
        $result = $conn->query($sql) ;
        $row=$result->fetch_assoc();
    }
        
  ?>      
        <div class="form-group">
            <label for="pid">ID</label>
            <input type="text" class="form-control" id="pid" name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];}?>" >
        </div>
        <div class="form-group">
            <label for="pname">Name</label>
            <input type="text" class="form-control" id="pname" name="pname" value="<?php if(isset($row['pname'])){echo $row['pname'];}?>" >
        </div>
        <div class="form-group">
            <label for="paval">Available</label>
            <input type="paval" class="form-control" id="paval" name="paval" value="<?php if(isset($row['paval'])){echo $row['paval'];}?>">
        </div>
        <div class="form-group">
            <label for="ptotal">Total</label>
            <input type="ptotal" class="form-control" id="ptotal" name="ptotal"value="<?php if(isset($row['ptotal'])){echo $row['ptotal'];}?>">
        </div>
        <div class="form-group">
             <label for="poriginalcost">Original Cost(Each)</label>
            <input type="text" class="form-control" id="poriginalcost" name="poriginalcost" value="<?php if(isset($row['poriginalcost'])){echo $row['poriginalcost'];}?>"> 
        </div>
        <div class="form-group">
             <label for="psellingcost">Selling Cost(Each)</label>
            <input type="text" class="form-control" id="psellingcost" name="psellingcost" value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];}?>"> 
        </div>

        <div class="text-center">
        <input type="submit" value="Update" name="submit" class="btn btn-success shadow-sm mt-3 ">
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