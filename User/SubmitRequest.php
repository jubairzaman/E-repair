<?php
define('TITLE','Submit Request') ;
define('PAGE','SubmitRequest') ;
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

if(isset($_POST['submitrequest'])){
  //checking Empty Fields
    if(($_POST['requestinfo'] == "") || ($_POST['requestdesc'] == "") || ($_POST['username'] == "") || ($_POST['useradd1'] == "") || ($_POST['useradd2'] == "") || ($_POST['usercity'] == "") || ($_POST['usercode'] == "") || ($_POST['useremail'] == "") || ($_POST['usermobile'] == "") || ($_POST['userdate'] == "")){
       $msg = '<div class="alert alert-danger col-sm-6 ml-2 mt-4" role="alert">All Fields Are Required</div>'  ; 
    
}else{
      $rinfo = $_POST['requestinfo'] ;
      $rdesc = $_POST['requestdesc'] ;
      $rname = $_POST['username'] ;
      $radd1 = $_POST['useradd1'] ;
      $radd2 = $_POST['useradd2'] ;
      $rcity = $_POST['usercity'] ;
      $rcode = $_POST['usercode'] ;
      $remail = $_POST['useremail'] ;
      $rmobile = $_POST['usermobile'] ;
      $rdate = $_POST['userdate'] ;
    $sql= "INSERT INTO user_request(request_info,request_desc ,user_name ,	user_add1 ,	user_add2,	user_city,	user_code,	user_email,	user_mobile,	user_date) VALUES('$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rcode','$remail','$rmobile','$rdate')" ;
            if($conn->query($sql)==TRUE) 
           {
                $genid = mysqli_insert_id($conn) ; //request_id capture from request table
        $msg= '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Request Submitted Successfully</div>' ;
            $_SESSION['myid'] = $genid ;
            echo "<script> location.href='SubmitRequestSuccess.php'</script>" ; 
           }else
            {
                $msg= '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Request Unable To Submit</div>' ;
            }
    }
    
}
    ?>

<div class="col-sm-9 col-md-10 mt-5"> <!-- Start Service Request Form Second Column -->
    <form class="mx-5" action="" method="post">
        <div class="form-group">
            <label for="inputRequestInfo">Request Info</label>
            <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo" >
        </div>
        <div class="form-group">
            <label for="inputRequestDescription">Description</label>
            <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc" >
        </div>
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Your Name" name="username" >
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Address Line 1</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="House No 2" name="useradd1" >
        </div>
            <div class="form-group col-md-6">
            <label for="inputAddress2">Address Line 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Eastern Avenue" name="useradd2" >
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="usercity" >
        </div>
            <div class="form-group col-md-2">
            <label for="inputCode">Code</label>
            <input type="text" class="form-control" id="inputcode" name="usercode" onkeypress="isInputNumber(event)">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="text" class="form-control" id="inputEmail" name="useremail"  >
        </div>
            <div class="form-group col-md-4">
            <label for="inputMobile">Mobile</label>
            <input type="text" class="form-control" id="inputmobile" name="usermobile" onkeypress="isInputNumber(event)">
        </div>
            <div class="form-group col-md-2">
            <label for="inputDate">Date</label>
            <input type="date" class="form-control" id="inputdate" name="userdate" placeholder="dd/mm/yyyy">
        </div>
        </div>
            <input type="submit" value="Submit" name="submitrequest" class="btn btn-danger shadow-sm mt-3 ">
            <input type="reset" value="Reset" name="resetrequest" class="btn btn-secondary shadow-sm mt-3 ">
    </form>
         <?php
        if(isset($msg))
        {
            echo $msg ;
        } 
        ?>

</div> <!-- End Service Request Form Second Column -->
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