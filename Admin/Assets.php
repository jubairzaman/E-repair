<?php
define('TITLE','Assets') ;
define('PAGE','Assets') ;
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

     <div class="col-sm-9 col-md-10 mt-5">
      <p class="bg-dark text-center text-white p-2">Products/Parts Details</p>
         <?php
                      $sql= "SELECT * FROM asset_list" ;
                      $result = $conn->query($sql) ;
                          if($result->num_rows>0){
                              echo '<table class="table">
                              <thead>
                              <tr>
                              <th scope="col">Product ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Availabile</th>
                              <th scope="col">Total</th>
                              <th scope="col">Original Cost Each</th>
                              <th scope="col">Selling Cost Each</th>
                              <th scope="col">Action</th>
                              </tr>
                              </thead>
                              <tbody>';
                              while($row = $result->fetch_assoc()){
                              echo '<tr>';
                              echo'<td>'.$row["pid"].'</td>' ;
                              echo'<td>'.$row["pname"].'</td>' ;
                              echo'<td>'.$row["paval"].'</td>' ;
                              echo'<td>'.$row["ptotal"].'</td>' ;
                              echo'<td>'.$row["poriginalcost"].'</td>' ;
                              echo'<td>'.$row["psellingcost"].'</td>' ;
                              echo '<td>
                              <form action="EditProduct.php" method="POST" class="d-inline">
                              <input type="hidden" name="pid" value='.$row["pid"].'>
                              <button class="btn btn-info mt-2" name="edit" value="Edit" type="submit"><i class ="fas fa-pen"></i></button>
                              </form>
                              <form action="" method="POST" class="d-inline">
                              <input type="hidden" name="pid" value='.$row["pid"].'>
                              <button class="btn btn-danger mt-2" name="delete" value="Delete" type="submit"><i class ="far fa-trash-alt"></i></button>
                              </form>
                              <form action="SellProduct.php" method="POST" class="d-inline">
                              <input type="hidden" name="pid" value='.$row["pid"].'>
                              <button class="btn btn-secondary mt-2" name="issue" value="Issue" type="submit"><i class ="fas fa-handshake"></i></button>
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
$sql = "DELETE  FROM asset_list WHERE  pid={$_REQUEST['pid']}";
if($conn->query($sql)==TRUE) {
    echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>' ;
}else{
    echo "Unable to Delete" ;
}
}
    ?>
         </div>
<div class="float-right"><a href="AddProduct.php" class="btn btn-danger"><i class ="fas fa-plus fa-2x"></i></a></div>


<?php
include('includes/footer.php') ;
?>