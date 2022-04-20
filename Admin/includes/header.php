<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatoble" content="ie=edge">
        <title><?php echo TITLE ?></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        
        <! -- Font Awesome CSS -->
        <link rel="stylesheet" href="../CSS/all.min.css">
        
        <! -- Custom CSS -->
        <link rel="stylesheet" href="../CSS/custom.css">
        
                <! -- Custom CSS -->
        <link rel="stylesheet" href="../CSS/custom-active.css">
        
         </head>
    <body>
        <!-- Top Navbar -->
        <nav class="navbar navbar dark fixed top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-3 mr-0 text-white" href="AdminDashboard.php">Repairing Service Maintenance</a></nav>
        
        <! -- start container -->
        <div class="container-fluid" style="text-color:red;">
            <div class="row">
                <!-- start sidebar 1st column  -->
                <nav class="col-sm-2 bg-light sidebar py-5  d-print-none">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column text-red">
                            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'AdminDashboard'){echo 'active';} ?>" href="AdminDashboard.php" ><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Work'){echo 'active';} ?>" href="Work.php" ><i class="fab fa-accessible-icon"></i>Work Order</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'Request'){echo 'active';} ?>"  href="Request.php" ><i class="fas fa-allign center"></i>Request</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'Assets'){echo 'active';} ?>"  href="Assets.php" ><i class="fas fa-database"></i>Assets</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'Technician'){echo 'active';} ?>"  href="Technician.php" ><i class="fas fa-teamspeak"></i>Technician</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'Requester'){echo 'active';} ?>"  href="Requester.php" ><i class="fas fa-user"></i>Requester</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'SellReport'){echo 'active';} ?>"  href="SellReport.php" ><i class="fas fa-table"></i>Sell Report</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'WorkReport'){echo 'active';} ?>"  href="WorkReport.php" ><i class="fas fa-table"></i>Work Report</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'ChangePass'){echo 'active';} ?>"  href="ChangePass.php" ><i class="fas fa-key"></i>Change Password</a></li>
                            <li class="nav-item"><a class="nav-link <?php if(PAGE== 'Logout'){echo 'active';} ?>"  href="../Logout.php" ><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                        </ul>
                    </div>
                </nav> <!-- end side bar 1st column -->