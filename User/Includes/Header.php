<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatoble" content="ie=edge">
                <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        
        <! -- Font Awesome CSS -->
        <link rel="stylesheet" href="../CSS/all.min.css">
        
        <! -- Custom CSS -->
        <link rel="stylesheet" href="../CSS/custom-active.css">
        
        <title><?php echo TITLE ?></title>
        </head>
    <body>
        
        <nav class="navbar navbar dark fixed top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-3 mr-0 text-white" href="UserProfile.php">Repairing Service Maintenance</a></nav>
        <! -- start container -->
        <div class="container-fluid" style="text-color:red;">
            <div class="row">
                <!-- start sidebar 1st column  -->
                <nav class="col-sm-2 bg-light sidebar py-5">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column text-red">
                            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'UserProfile'){echo 'active';} ?>" href="UserProfile.php" ><i class="fas fa-user"></i>Profile</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'SubmitRequest'){echo 'active';} ?>" href="SubmitRequest.php" ><i class="fab fa-accessible-icon"></i>Submit Request</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'CheckStatus'){echo 'active';} ?>"  href="CheckStatus.php" ><i class="fas fa-allign center"></i>Service Status</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'UserChangePW'){echo 'active';} ?>"  href="UserChangePW.php" ><i class="fas fa-key"></i>Change Password</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'Logout'){echo 'active';} ?>"  href="../Logout.php" ><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                        </ul>
                    </div>
                </nav> <!-- end side bar 1st column -->
                
            