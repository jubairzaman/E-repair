<?php
define('TITLE','sell Products') ;
define('PAGE','SellProduct') ;
include('includes/header.php') ;
include('../dbConnection.php') ;


session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
if(isset($_REQUEST['submit'])){
    if(($_REQUEST['cname'] == "") || ($_REQUEST['cadd'] == "") || ($_REQUEST['pname'] == "") || ($_REQUEST['pquantity'] == "") || ($_REQUEST['psellingcost'] == "") || ($_REQUEST['totalcost'] == "") ||
      ($_REQUEST['selldate'] == "")){
        $msg= '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>' ;
    }else{
        $pid = $_REQUEST['pid'] ;
        $paval = $_REQUEST['paval'] - $_REQUEST['pquantity'] ;
        $custname = $_REQUEST['cname'] ;
        $custadd = $_REQUEST['cadd'] ;
        $cpname = $_REQUEST['pname'] ;
        $cpquantity = $_REQUEST['pquantity'] ;
        $cpeach = $_REQUEST['psellingcost'] ;
        $cptotal = $_REQUEST['totalcost'] ;
        $cpdate = $_REQUEST['selldate'] ;
       
       $sql= "INSERT INTO customer_tb(custname,custadd,cpname,cpquantity,cpeach,cptotal,cpdate) values('$custname','$custadd','$cpname','$cpquantity','$cpeach','$cptotal','$cpdate')" ;
           if($conn->query($sql)==TRUE) 
           {
               
                               $genid = mysqli_insert_id($conn) ;
                 session_start() ;
               $_SESSION['myid'] = $genid ;
               echo "<script>location.href='productsellsuccess.php' ;</script>" ;
               echo "added" ;
           }

            $sqlup = "UPDATE asset_list set paval='$paval' WHERE pid='$pid'" ;
        $conn->query($sqlup) ;
    }

}
?>
<div class="col-sm-5 mt-5" style="background-color :#D0D0D0 ;"> 
   
        <h5 class="text-center">Customer Bill</h5>
        
            <?php
    if(isset($_REQUEST['issue'])){
        $sql = "SELECT * FROM asset_list WHERE pid={$_REQUEST['pid']}";
        $result = $conn->query($sql) ;
        $row=$result->fetch_assoc();
    }
        
  ?> 
     <form class="mx-5" action="" method="post">
         <div class="form-group">
            <label for="pid">ID</label>
            <input type="text" class="form-control" id="pid" name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];}?>" >
        </div>
         <div class="form-group">
            <label for="cname">Customer Name</label>
            <input type="text" class="form-control" id="pid" name="cname" >
        </div>
         
        <div class="form-group">
            <label for="cadd">Customer Address</label>
            <input type="text" class="form-control" id="cadd" name="cadd"  >
        </div>
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" class="form-control" id="pname" name="pname" value="<?php if(isset($row['pname'])){echo $row['pname'];}?>" >
        </div>
        <div class="form-group">
            <label for="paval">Available</label>
            <input type="paval" class="form-control" id="paval" name="paval" value="<?php if(isset($row['paval'])){echo $row['paval'];}?>">
        </div>
         <div class="form-group">
            <label for="pquantity">Quantity</label>
            <input type="text" class="form-control" id="pquantity" name="pquantity" >
        </div>
        
        <div class="form-group">
             <label for="psellingcost">Price Each</label>
            <input type="text" class="form-control" id="psellingcost" name="psellingcost" value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];}?>"> 
        </div>
         <div class="form-group">
             <label for="totalcost">Total Price</label>
            <input type="text" class="form-control" id="psellingcost" name="totalcost" > 
        </div>
         <div class="form-group">
             <label for="inputDate">Date</label>
            <input type="date" class="form-control" id="psellingcost" name="selldate"> 
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


<?php
include('includes/footer.php') ;
?>