<?php
define('TITLE','Technician') ;
define('PAGE','Technician') ;
include('../dbConnection.php') ;
include('includes/header.php') ;
session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
?>

     <div class="col-sm-9 col-md-10 mt-5">
      <p class="bg-dark text-center text-white p-2">List of Technicians</p>
         <?php
                      $sql= "SELECT * FROM technician_list" ;
                      $result = $conn->query($sql) ;
                          if($result->num_rows>0){
                              echo '<table class="table">
                              <thead>
                              <tr>
                              <th scope="col">Emp ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">City</th>
                              <th scope="col">Mobile</th>
                              <th scope="col">Email</th>
                              <th scope="col">Action</th>
                              </tr>
                              </thead>
                              <tbody>';
                              while($row = $result->fetch_assoc()){
                              echo '<tr>';
                              echo'<td>'.$row["empid"].'</td>' ;
                              echo'<td>'.$row["empName"].'</td>' ;
                              echo'<td>'.$row["empCity"].'</td>' ;
                              echo'<td>'.$row["empMobile"].'</td>' ;
                              echo'<td>'.$row["empEmail"].'</td>' ;
                              echo '<td>
                              <form action="EditEmp.php" method="POST" class="d-inline">
                              <input type="hidden" name="id" value='.$row["empid"].'>
                              <button class="btn btn-info mt-2" name="edit" value="Edit" type="submit"><i class ="fas fa-pen"></i></button>
                              </form>
                              <form action="" method="POST" class="d-inline">
                              <input type="hidden" name="id" value='.$row["empid"].'>
                              <button class="btn btn-danger mt-2" name="delete" value="Delete" type="submit"><i class ="far fa-trash-alt"></i></button>
                              </form>
                              </td>
                              ' ;
                              echo'</tr>';
                              }
                              echo'</tbody>
                              </table>
                              ';
                          }else{
                              echo'0 results' ;
                          }
                      ?>
 <!--   second column -->
         <?php

if(isset($_REQUEST['delete'])){
$sql = "DELETE  FROM technician_list WHERE  empid={$_REQUEST['id']}";
if($conn->query($sql)==TRUE) {
    echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>' ;
}else{
    echo "Unable to Delete" ;
}
}
    ?>
         </div>
<div class="float-right"><a href="InsertEmp.php" class="btn btn-danger"><i class ="fas fa-plus fa-2x"></i></a></div>



<?php
include('includes/footer.php') ;
?>