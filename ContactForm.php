<?php
if(isset($_REQUEST['submit'])){
    if(($_REQUEST['name']=="") || ($_REQUEST['subject']=="") || ($_REQUEST['email']=="") || ($_REQUEST['message']=="")){
        $msg= '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>' ;
    }else{
        $name=$_REQUEST['name'] ;
        $subject=$_REQUEST['subject'] ;
        $email=$_REQUEST['email'] ;
        $message = $_REQUEST['message'] ;
        
        $sql= "INSERT INTO contact_form(name,subject,email,help_desc) values('$name','$subject','$email','$message')" ;
           if($conn->query($sql)==TRUE) 
           {
                 $msg= '<div class="alert alert-success mt-2" role="alert">Message sent Successfully</div>' ;
           }
            else
            {
                $msg= '<div class="alert alert-success mt-2" role="alert">Unable to Send</div>' ;
            }
    }
}
?>










<! -- Start Contact Us section -- !>
<div class="container" id="Contact">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row">
                <div class="col-md-8">
                        <form action=""  method="POST">
                        <input type="text" class="form-control" name="name" placeholder="Name"><br>
                        <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                        <input type="email" class="form-control" name="email" placeholder="Email"><br>
                        <textarea input type="text" class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
                            <p align="right"><input type="submit" class="btn btn-primary" value="Send" name="submit"></p><br>
                            <?php
        if(isset($msg))
        {
            echo $msg ;
        } 
        ?>
                    </form>
                </div>   
            </div>
        </div>   
 <! -- end contact us section -- !>