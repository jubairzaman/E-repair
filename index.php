<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatoble" content="ie=edge">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        
        <! -- Font Awesome CSS -->
        <link rel="stylesheet" href="CSS/all.min.css">
        
        <! -- Google Font -->
         <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        
        <! -- Custom CSS -->
        <link rel="stylesheet" href="CSS/custom.css">
        
        <title>Repairing Service System</title>
    </head>
    <body>
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-10 fixed-top">
        <a href="index.php" class="navbar-brand">Repairing Service Maintainence</a>
        <span class="navbar-text">Customer's Happiness is our Aim</span>
<button type="button" class="navbar-toggler"
        data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav  pl-10 px-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">   Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">   Services</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="User/UserLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div >
        </nav> <! -- End Navigation -->
        
        <!-- Start Header Jumbotron -->
        <header class="jumbotron back-image"  style="background-image: url(Images/cover.jpeg);">
            <div class="myclass mainHeading">
                <h1 class="text-uppercase text-white font-weight:bold ">Welcome To The Service System</h1>
                <p class="font-italic  text-white" >Customer's Happiness is our Aim</p>
                <a href="User/UserLogin.php" class="btn btn-success mr-4">Login</a>
                <a href="#registration" class="btn btn-danger mr-4 ">Sign Up</a>
            </div>
        </header>
           <!-- End Header Jumbotron -->
         <!-- Start Introduction -->
        <div class="container">
            <div class="jumbotron">
                <h3 class="text-center">Repairing Service System</h3>
                <p>
                    we are aware that creating client oriented software
that takes a mixture of technical excellence and clear communication between the customers.This service system provides the best way to ensure receiving qualitiful service. We know every client is unique and we strive to deliver an individual, innovative and affordable online service to repair their technologies at the door step. Besides the technology manufacturers can use this online software to manage their clients. So through our service system can lead an outstanding delivery which is within both time and budget.
                </p>
            </div>
        </div>
        <!-- End Introduction -->
        
        <!-- Start Service Section -->
        
        <div class="container text-center border-bottom" id="Services">
            <h2>Our Services </h2>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                    <h4 class="mt-4">Electronic Appliances</h4>
                </div>
                <div class="col-sm-4">
                    <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                    <h4 class="mt-4">Preventive Maintenance</h4>
                </div>
                <div class="col-sm-4">
                    <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                    <h4 class="mt-4">Fault Repair</h4>
                </div>
                
            </div>
        </div>
           <!-- End Service Section -->
        
    <!-- Start Registration Section -->
       <?php include('UserRegistration.php') ?>
    <!-- End Registration Section -->
        
        <!-- Start Technicians Section -->
        <div class="jumbotron bg-danger"></div>
        <div class="container" style="background-color:danger">
            <h2 class="text-center text-Black">Technicians</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb=2">
                    <div class="card-body text-center">
                        <img src=Images/techh1.jpg class="img-fluid" style="border-radius:100px" alt="avt1">
                        <h4 class="card-title">Shafin Ahmed</h4>
                        <p class="card-text text-center">
                            <center>Shafin Ahmed is very hard working.He is responsible for hardware technical works</center>
                        </p>
                        </div>
                    </div>
                </div>
                <! -- end 1st Column -- !>
                
                <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb=2">
                    <div class="card-body text-center">
                        <img src=Images/tech2.jpg class="img-fluid" style="border-radius:100px" alt="avt1">
                        <h4 class="card-title">Faisal Sharif</h4>
                        <p class="card-text text-center">
                            <center>Faisal Sharif is very hard working.He is responsible for hardware technical works</center>
                        </p>
                        </div>
                    </div>
                </div>
              <! -- end 2nd Column -- !>
                
                <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb=2">
                    <div class="card-body text-center">
                        <img src=Images/techh3.jpg class="img-fluid" style="border-radius:100px" alt="avt1">
                        <h4 class="card-title">Raihan Khan</h4>
                        <p class="card-text text-center">
                            <center>Raihan Khan is very hard working.He is responsible for hardware technical works</center>
                        </p>
                        </div>
                    </div>
                </div>
                <! -- end 3rd Column -- !>
                
                <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb=2">
                    <div class="card-body text-center">
                        <img src=Images/tech4.jpg class="img-fluid" style="border-radius:100px" alt="avt1">
                        <h4 class="card-title">Rafi Hasan</h4>
                        <p class="card-text text-center">
                            <center>Rafi Hasan is very hard working.He is responsible for hardware technical works</center>
                        </p>
                        </div>
                    </div>
                </div>
                 <! -- end 4th Column -- !>
            </div>
        </div>
          
        <! -- Start Contact Us section -- !>
        <?php include('ContactForm.php') ?>
        <! -- end contact us section -- !>
        
           
        <! -- Start Footer -- !>
        <footer class="container=fluid bg-dark mt-5 text-white">
            <div class="container">
                <div class="row py-1">
                    <div class="col-md-6">    <! -- Start 1st columnn -- !>
                        <span class="pr-2">Follow Us           </span>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                    
                    </div>                
                    <! -- end 1st columnn -- !>
                    
                      <! -- start 2nd columnn -- !>
                    <div class="col-md-6 text-right">
                        <small>(c)2021 RSM-All rights reserved-Privacy-Terms-Accessibility</small>
                        <small class="ml-2"><a href="Admin/AdminLogin.php">Admin Login</a></small>
                    </div> 
                        <! -- end 2nd columnn -- !>
                </div>
            </div>
        </footer>   <! -- End Footer -- !>
        
        
        <!-- JavaScript -->
        <script src="JS/jquery.min.js"></script>
        <script src="JS/popper1.min.js"></script>
        <script src="JS/bootstrap.min.js"></script>
        <script src="JS/all.min.js"></script>
    </body>
</html>