<?php
define('TITLE','Work Order') ;
define('PAGE','Work') ;
include('../dbConnection.php') ;
include('includes/header.php') ;
include('../dbConnection.php') ;


session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
?>
<!-- start 2nd column -->
<div class="col-sm-9 col-md-10 mt-5">
    <h3 class="text-center">Assigned Work Details</h3>
    <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM assign_work WHERE request_id={$_REQUEST['id']}";
        $result = $conn->query($sql) ;
        $row=$result->fetch_assoc(); ?>
    <table class="table table-border">
        <tbody>
            <tr>
                <td>Request ID</td>
                <td><?php if(isset($row['request_id'])){ echo $row['request_id'] ; } ?></td>
            </tr>
            <tr>
                <td>Request Info</td>
                <td><?php if(isset($row['request_info'])){ echo $row['request_info'] ; } ?></td>
            </tr>
            <tr>
                <td>Request Description</td>
                <td><?php if(isset($row['request_desc'])){ echo $row['request_desc'] ; } ?></td>
            </tr>
            <tr>
                <td>User Name</td>
                <td><?php if(isset($row['user_name'])){ echo $row['user_name'] ; } ?></td>
            </tr>
            <tr>
                <td>User Address1</td>
                <td><?php if(isset($row['user_add1'])){ echo $row['user_add1'] ; } ?></td>
            </tr>
            <tr>
                <td>User Address2</td>
                <td><?php if(isset($row['user_add2'])){ echo $row['user_add2'] ; } ?></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?php if(isset($row['user_city'])){ echo $row['user_city'] ; } ?></td>
            </tr>
            <tr>
                <td>Code</td>
                <td><?php if(isset($row['user_code'])){ echo $row['user_code'] ; } ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php if(isset($row['user_email'])){ echo $row['user_email'] ; } ?></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><?php if(isset($row['user_mobile'])){ echo $row['user_mobile'] ; } ?></td>
            </tr>
            <tr>
                <td>Technician Name</td>
                <td><?php if(isset($row['assign_tech'])){ echo $row['assign_tech'] ; } ?></td>
            </tr>
            <tr>
                <td>Assign Date</td>
                <td><?php if(isset($row['assign_date'])){ echo $row['assign_date'] ; } ?></td>
            </tr>
            <tr>
                <td>Customer Sign</td>
                <td></td>
            </tr>
            <tr>
                <td>Technician Sign</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="text-center">
        <form action="" class="mb-5 d-print-none d-inline">
                        <input type="submit" value="Print" name="submitrequest" class="btn btn-danger shadow-sm mb-3" onClick='window.print()' ></form>
            <form action="Work.php" class="mb-5 d-print-none d-inline">
            <input type="reset" value="Close" name="resetrequest" class="btn btn-secondary shadow-sm mb-3 ">
        </form>

    </div>
   <?php } ?>
</div>
<!-- end 2nd column -->

<?php
include('includes/footer.php') ;
?>