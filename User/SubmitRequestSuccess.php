<?php
define('TITLE','Submit Request Success') ;
define('PAGE','SubmitRequestSuccess') ;
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
$sql = "SELECT * FROM user_request WHERE request_id={$_SESSION['myid']}" ;
    $result = $conn->query($sql) ;
if($result->num_rows == 1){
    $row = $result->fetch_assoc() ;
     echo"<div class='col-sm-6 ml-5 mt-5'>
    <table class='table'>
    <tbody>
       <tr>
        <th>Request ID</th>
         <td>".$row['request_id']."</td>
       </tr> 
       <tr>
        <th>Name</th>
         <td>".$row['user_name']."</td>
       </tr> 
       <tr>
        <th>Email</th>
         <td>".$row['user_email']."</td>
       </tr> 
       <tr>
        <th>Request Info</th>
         <td>".$row['request_info']."</td>
       </tr> 
       <tr>
        <th>Request Description</th>
         <td>".$row['request_desc']."</td>
       </tr> 
       <tr>
        <th>Email</th>
         <td><formclass='d-print-none'><input type='submit' value='Print' class='btn btn-danger shadow-sm mt-3' onClick='window.print()'></form></td>
       </tr> 
    </tbody>
    </table>
        </div>" ; 
}else{
    echo "Failed" ;
}

include('Includes/Footer.php') ;
    
?>