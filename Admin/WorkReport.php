<?php
define('TITLE','Work Report') ;
define('PAGE','WorkReport') ;
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
<div class="col-sm-9 col-md-10 mt-5 text-center">
    <form action="" method="post" class="d-print-none">
        <div class="form-row">
            <div class="form-group col-md-2 ">
                <input type="date" class="form-control" id="startdate" name="startdate">
            </div> <span> to </span>
            <div class="form-group col-md-2 ">
                <input type="date" class="form-control" id="enddate" name="enddate">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-secondary" name="searchsubmit" value="Search">
            </div>
        </div>
    </form>
    <?php
    if(isset($_REQUEST['searchsubmit'])){
        $startdate = $_REQUEST['startdate'] ;
        $enddate = $_REQUEST['enddate'] ;
    $sql = "SELECT * FROM assign_work WHERE assign_date BETWEEN '$startdate' AND '$enddate'" ;
    $result = $conn->query($sql) ;
    if($result->num_rows >0){
        echo '<p class="bg-dark text-white p-2 mt-4">Details</p>
        <table class="table">
        <thead>
        <tr>
        <th scope="col">Request ID</th>
        <th scope="col">Request Info</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>';
        echo'<th scope="col">City</th>';
        echo'<th scope="col">Mobile</th>' ;       
        echo'<th scope="col">Technician</th>';
        echo'<th scope="col">Assign Date</th>';
        echo'</tr>';
        echo'</thead>';
        echo'<tbody>';
        while($row = $result->fetch_assoc()){
        echo'<tr>';
        echo'<td>'.$row['request_id'].'</td>';
        echo '<td>'.$row['request_info'].'</td>
        <td>'.$row['user_name'].'</td>
        <td>'.$row['user_add2'].'</td>
        <td>'.$row['user_city'].'</td>
        <td>'.$row['user_mobile'].'</td>
        <td>'.$row['assign_tech'].'</td>
        <td>'.$row['assign_date'].'</td>
        </tr>';
        }
        echo '<tr>';
        echo '<td>' ;
        echo'<input type="submit" class="btn btn-danger d-print-none" value="Print" onClick="window.print()">
        </td>
        </tr>
        </tbody>
        </table>' ;
    }else{
        echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2 role='alert'>No records Founf!!</div>";
    }
    
    }
    ?>
</div>
<?php
include('includes/footer.php') ;
?>