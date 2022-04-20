<?php
define('TITLE','User Status') ;
define('PAGE','CheckStatus') ;
include('Includes/Header.php') ;
include('../dbConnection.php') ;
session_start() ;
//Start Show Name and email
if(isset($_SESSION['is_login'])){
    $uemail =  $_SESSION['uEmail']  ;
}
else{
    echo "<script> location.href='UserLogin.php'</script>" ;
}

?>
<!-- start 2nd column -->
<div class="col-sm-6 mt-5 mx-3">
    <form class="form-inline" action="" method="POST">
        <div class="form-group mr-3">
            <label for="checkid">Enter Request Id :</label>
            <input type="text" class="form-control" id="checkid" name="checkid"  onkeypress="isInputNumber(event)" >
        </div>
        <input type="submit" value="Search"  class="btn btn-danger shadow-sm mt-3 ">
    </form>
    
    
    <?php
    if(isset($_REQUEST['checkid'])){
        if($_REQUEST['checkid']== ""){
                        
                $msg= '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">fill the field</div>' ;
        }else{
        $sql = "SELECT * FROM assign_work WHERE request_id ={$_REQUEST['checkid']}";
        $result = $conn->query($sql) ;
        $row=$result->fetch_assoc();
        if(($row['request_id'] == $_REQUEST['checkid'])){ ?>
   
    <h3 class="text-center mt-5">Assign Work Details</h3>
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
        <form action="" class="mb-5 d-print-none">
                        <input type="submit" value="Print" name="submitrequest" class="btn btn-danger shadow-sm mb-3" onClick='window.print()' >
            <input type="reset" value="Close" name="resetrequest" class="btn btn-secondary shadow-sm mb-3 ">
        </form>
    </div>
    <?php }else{
        echo '<div class="alert alert-warning mt-4" role="alert">Request is still Pending</div>' ;
    }
    }
}?>
             <?php
        if(isset($msg))
        {
            echo $msg ;
        } 
        ?>
</div> <!-- end 2nd column -->
<!-- Only Number for input Fields -->
<script>
    function isInputNumber(evt){
        var ch = String.fromCharCode(evt.which) ;
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault() ;
        }
    }
</script>


<?php
include('Includes/Footer.php') ;
    ?>