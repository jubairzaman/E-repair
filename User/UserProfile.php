<?php
define('TITLE','User Profile') ;
define('PAGE','UserProfile') ;
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
$sql= "SELECT Name ,Email FROM userlist_info WHERE Email='$uemail'" ;
$result = $conn->query($sql) ;
if($result->num_rows == 1){
    $row = $result->fetch_assoc() ;
    $uname = $row['Name'] ;
} //End Show Name and email

if(isset($_POST['nameupdate'])){
    if($_POST['uname']== "" ){
    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill The Fields Properly</div>' ;
    }
    else{
       $uName = $_POST['uname'] ; //updated new name input
        $sql = "UPDATE userlist_info SET Name='$uName'WHERE Email='$uemail'" ;
        if($conn->query($sql)== TRUE)
        {
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Successfully Updated</div>' ;
        }
        else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>' ;
        }
    }
}
?>

                <div class="col-sm-6 mt-5"> <!-- start profile area 2nd column -->
                    <form action="" method="POST" class="mx-5">
                        <div class="form-group">
                            <label for="inputEmail">Email</label><input type="email" class="form-control"  name="uemail" id="uemail" value="<?php echo $uemail ; ?>" >
                            </div>
                        <div class="form-group">
                             <label for="name">Name</label><input type="text" name="uname" class="form-control"  id="uname" value="<?php echo $uname ;?>">
                        </div>
                        <input type="submit" value="Update" name="nameupdate" class="btn btn-danger shadow-sm mt-3 ">
                        <?php if(isset($passmsg)){
                                echo $passmsg ;
}
                        ?>

                    </form>
                </div>  <!-- end profile area 2nd column -->
            <?php
include('Includes/Footer.php') ;
    ?>