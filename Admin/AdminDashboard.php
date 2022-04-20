<?php
define('TITLE','AdminDashboard') ;
define('PAGE','AdminDashboard') ;
include('../dbConnection.php') ;
include('includes/header.php') ;
include('../dbConnection.php') ;
session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
$sql = "SELECT max(request_id) FROM user_request" ;
$result = $conn->query($sql) ;
$row = mysqli_fetch_row($result) ;
$submitreq = $row[0] ;

$sql = "SELECT max(request_id) FROM assign_work" ;
$result = $conn->query($sql) ;
$row = mysqli_fetch_row($result) ;
$assignwork = $row[0] ;
//$assignwork = $result->num_rows ;

$sql = "SELECT * FROM technician_list" ;
$result = $conn->query($sql) ;
$totaltech = $result->num_rows ;

?>


                <div class="col-sm-9"> <!-- Start Dashboard 2nd Column -->
                    <div class="row text-center mx-5">
                        <div class="col-sm-4 mt-5">
                            <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                                <div class="card-header">Requests Received</div>
                                <div class="card-body">
                                <h4 class="card-title"><?php echo $submitreq ; ?></h4>
                                <a class="btn text-white" href="Request.php">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4  mt-5">
                            <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                                <div class="card-header">Assigned Work</div>
                                <div class="card-body">
                                <h4 class="card-title"><?php echo $assignwork ; ?></h4>
                                <a class="btn text-white" href="Work.php">View</a>
                                    </div>   
                                </div>
                            </div>
                        
                        <div class="col-sm-4  mt-5">
                            <div class="card text-white  bg-info mb-3" style="max-width:18rem;">
                                <div class="card-header">No. of Technicians</div>
                                <div class="card-body">
                                <h4 class="card-title"><?php echo $totaltech ; ?></h4>
                               <a  href="Technician.php" class="btn text-white">View</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row1 -->
                    
                  <div class="mx-5 mt-5 text-center"> <!-- start row2 -->
                      <center><p class="bg-dark text-white p-2" style="width:40rem;">List of Requesters</p></center>
                      <?php
                      $sql= "SELECT * FROM userlist_info" ;
                      $result = $conn->query($sql) ;
                          if($result->num_rows>0){
                              echo '<table class="table">
                              <thead>
                              <tr>
                              <th scope="col">User ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              </tr>
                              </thead>
                              <tbody>';
                              while($row = $result->fetch_assoc()){
                              echo '<tr>';
                              echo'<td>'.$row["Id"].'</td>' ;
                              echo'<td>'.$row["Name"].'</td>' ;
                              echo'<td>'.$row["Email"].'</td>' ;
                              echo'</tr>';
                              }
                              echo'</tbody>
                              </table>
                              ';
                          }else{
                              echo'0 results' ;
                          }
                      ?>
                </div>  <!-- end row2 -->
                    
        </div> <!-- end Dashboard 2nd Column -->
        
    <?php
include('includes/footer.php') ;
?>