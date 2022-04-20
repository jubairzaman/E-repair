<?php
define('TITLE','Request') ;
define('PAGE','Request') ;
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

 <!-- start second column -->
<div class="col-sm-4 mb-5">
    <?php
    $sql = "SELECT request_id, request_info , request_desc ,user_date FROM user_request" ;
    $result = $conn->query($sql) ;
    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<div class="card mt-5 mx-5">' ;
            echo '<div class="card-header">' ;
            echo 'Request ID: '.$row['request_id'] ;
            echo '</div>' ;
            echo '<div class="card-body">' ;
            echo '<h5 class="card-title">Request Info: '.$row['request_info'];
            echo '</h5>' ;
            echo '<p class="card-text">'.$row['request_desc'];
            echo '</p>';
            echo '<p class="card-text">Request Date: '.$row['user_date'];
            echo '</p>';
            echo '<form action="" method="POST">' ;
            echo '<input type="hidden" name="id" value='.$row["request_id"].'>' ;
            echo '<input type="submit" class="btn btn-danger" name="view" value="View">';
            echo '<input type="submit" class="btn btn-secondary" name="close" value="Close">';
            echo '</form>' ;
            echo '</div>' ;
            echo '</div>' ;

        }
    }
    ?>
    </div> <!-- end second column -->



<?php
include('AssignWorkForm.php') ;
include('includes/footer.php') ;
?>