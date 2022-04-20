<?php 
if(session_id()==''){
session_start() ;
}
if(isset($_SESSION['is_adminlogin'])){
    $aemail= $_SESSION['aEmail'];
}else{
    echo "<script>location.href='AdminLogin.php'</script>" ;
}

if(isset($_REQUEST['view'])){
$sql = "SELECT * FROM user_request WHERE request_id ={$_REQUEST['id']}";
$result = $conn->query($sql) ;
$row=$result->fetch_assoc();
}
if(isset($_REQUEST['close'])){
$sql = "DELETE  FROM user_request WHERE request_id ={$_REQUEST['id']}";
if($conn->query($sql)==TRUE) {
    echo '<meta http-equiv="refresh" content="0;URL=?closed"/>' ;
}else{
    echo "Unable to Delete" ;
}
}
if(isset($_REQUEST['assign'])){
    if( ($_REQUEST['requestid'] == "") || ($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['username'] == "") || ($_REQUEST['useradd1'] == "") || ($_REQUEST['useradd2'] == "") || ($_REQUEST['usercity'] == "") || ($_REQUEST['usercode'] == "") || ($_REQUEST['useremail'] == "") || ($_REQUEST['usermobile'] == "") || ($_REQUEST['assigntech'] == "") || ($_REQUEST['inputdate'] == "")){
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">All Fields Are Required</div>'  ; 
    }else{
        $rid = $_REQUEST['requestid'] ;
        $rinfo = $_REQUEST['requestinfo'] ;
        $rdesc = $_REQUEST['requestdesc'] ;
        $rname = $_REQUEST['username'] ;
        $radd1 = $_REQUEST['useradd1'] ;
        $radd2 = $_REQUEST['useradd2'] ;
        $rcity = $_REQUEST['usercity'] ;
        $rcode = $_REQUEST['usercode'] ;
        $remail = $_REQUEST['useremail'] ;
        $rmobile = $_REQUEST['usermobile'] ;
        $rassigntech = $_REQUEST['assigntech'] ;
        $rdate = $_REQUEST['inputdate'] ;
        
            $sql= "INSERT INTO assign_work(request_id ,request_info,request_desc ,user_name ,	user_add1 ,	user_add2,	user_city,	user_code,	user_email,	user_mobile,assign_tech,assign_date) VALUES('$rid','$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity',
            '$rcode','$remail','$rmobile','$rassigntech','$rdate')" ;
        if($conn->query($sql)==TRUE) {
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Work Assigned Successfully</div>'  ; 
}
    else{
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to assign work</div>'  ; 
}
}
}


?>

<div class="col-sm-5 mt-5" style="background-color :#D0D0D0 ;"> <!-- Start 3rd Column -->
    <form class="mx-5" action="" method="post">
        <h5 class="text-center">Assign Work Order Request</h5>
        <div class="form-group">
            <label for="inputRequestId">Request Id</label>
            <input type="text" class="form-control" id="inputRequestId" placeholder="Request Id" name="requestid" value="<?php if(isset($row['request_id'])){echo $row['request_id'];}?>">
        </div>
        <div class="form-group">
            <label for="inputRequestInfo">Request Info</label>
            <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo" value="<?php if(isset($row['request_info'])){echo $row['request_info'];}?>" >
        </div>
        <div class="form-group">
            <label for="inputRequestDescription">Description</label>
            <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc" value="<?php if(isset($row['request_desc'])){echo $row['request_desc'];}?>">
        </div>
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Your Name" name="username" value="<?php if(isset($row['user_name'])){echo $row['user_name'];}?>" >
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Address Line 1</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="House No 2" name="useradd1" value="<?php if(isset($row['user_add1'])){echo $row['user_add1'];}?>" >
        </div>
            <div class="form-group col-md-6">
            <label for="inputAddress2">Address Line 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Eastern Avenue" name="useradd2" value="<?php if(isset($row['user_add2'])){echo $row['user_add2'];}?>" >
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="usercity" value="<?php if(isset($row['user_city'])){echo $row['user_city'];}?>">
        </div>
            <div class="form-group col-md-2">
            <label for="inputCode">Code</label>
            <input type="text" class="form-control" id="inputcode" name="usercode" onkeypress="isInputNumber(event)" value="<?php if(isset($row['user_code'])){echo $row['user_code'];}?>">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="text" class="form-control" id="inputEmail" name="useremail" value="<?php if(isset($row['user_email'])){echo $row['user_email'];}?>" >
        </div>
            <div class="form-group col-md-4">
            <label for="inputMobile">Mobile</label>
            <input type="text" class="form-control" id="inputmobile" name="usermobile" onkeypress="isInputNumber(event)" value="<?php if(isset($row['user_mobile'])){echo $row['user_mobile'];}?>">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="assignTech">Assign to Technician</label>
            <input type="text" class="form-control" id="assigntech" name="assigntech"  >
        </div>
            <div class="form-group col-md-2">
            <label for="inputDate">Date</label>
            <input type="date" class="form-control" id="inputdate" name="inputdate">
        </div>
        </div>
        <div class="float-right">
            <input type="submit" value="Assign" name="assign" class="btn btn-success shadow-sm mt-3 ">
            <input type="reset" value="Reset" name="reset" class="btn btn-secondary shadow-sm mt-3 ">
            </div>
    </form>
     <?php
        if(isset($msg))
        {
            echo $msg ;
        } 
        ?>
</div>
