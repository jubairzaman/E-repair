<?php
define('TITLE','sell Products seccess') ;
define('PAGE','productsellseccess') ;
include('includes/header.php') ;
include('../dbConnection.php') ;


session_start() ;
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}
?>
<?php
include('includes/footer.php') ;
$sql = "SELECT * FROM customer_tb WHERE custid={$_SESSION['myid']}" ;
    $result = $conn->query($sql) ;
if($result->num_rows == 1){
    $row = $result->fetch_assoc() ;
     echo"<div class='col-sm-6 ml-5 mt-5 text-center'>
     <h3 class='text-center'>Customer Bill</h3>
    <table class='table text-center'>
    <tbody>
       <tr>
        <th>Customer ID</th>
         <td>".$row['custid']."</td>
       </tr> 
       <tr>
        <th>Customer Name</th>
         <td>".$row['custname']."</td>
       </tr> 
       <tr>
        <th>Customer Address</th>
         <td>".$row['custadd']."</td>
       </tr> 
       <tr>
        <th>Product Name</th>
         <td>".$row['cpname']."</td>
       </tr> 
       <tr>
        <th>Quantity</th>
         <td>".$row['cpquantity']."</td>
       </tr> 
       <tr>
        <th>Price Each</th>
         <td>".$row['cpeach']."</td>
       </tr> 
       <tr>
        <th>Total Cost</th>
         <td>".$row['cptotal']."</td>
       </tr> 
       <tr>
        <th>Date</th>
         <td>".$row['cpdate']."</td>
       </tr> 
       <tr>
        
         <td><form class='d-print-none'><input type='submit' value='Print' class='btn btn-danger shadow-sm mt-3' onClick='window.print()'></form></td>
         <td><a href='Assets.php' class='btn btn-secondary d-print-none>Close</a></td>
       </tr> 
    </tbody>
    </table>
        </div>" ; 
}else{
    echo "Failed" ;
}
?>