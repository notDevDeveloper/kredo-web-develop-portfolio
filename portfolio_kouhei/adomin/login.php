<?php

    session_start();  // this is important if you are using $_SESSION
    require '../classes/adomin.php';
    $staff = new Staff;
    

    // loginの作業
    if(isset($_POST['login'])){
        $staff_name = $_POST['name'];
        $staff_password = $_POST['pass'];
        $result = $staff->login($staff_name,$staff_password);
        if($result){
            $_SESSION['name'] = $result['staff__Name'];
            $_SESSION['pass'] = $result['staff__Password'];
            header('Location: index.php');
        }else{
            echo "User not Found!";
        }
    }
?>


<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/fancybox.min.css">
    
    <link rel="stylesheet" href="../fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    
    <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.html">Hotel</a></div>
          <div class="col-6 col-lg-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto">
                      <ul class="list-unstyled menu">
                        <li>Home</a></li>
                        <li><a href="reservation_table.php">Reservation</a></li>
                        <li><a href="customer_table.php">Customer</a></li>
                        <li class="activ"><a href="login.php">login</a></li>
                        <li ><a href="logout.php">logout</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero inner-page overlay" style="background-image: url(../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Login Form</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>Login</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mx-auto b-line" data-aos="fade-up" data-aos-delay="100"> 
            <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="text-center">
                <h3>Please login</h3>
              </div>
              <br>
              <div class="row">  
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="password">Password</label>
                  <input type="password" name="pass" id="password" class="form-control ">
                </div>
              </div>      
              <!-- <a href="#" class="btn btn-primary btn-lg mx-auto d-block">Login</a> -->
              <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg mx-auto d-block">
              <br>
            </form>
          </div> 
        </div>
        </div>  
          </div>
          
            
          
    
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.fancybox.min.js"></script>
    
    
    <script src="../js/aos.js"></script>
    
    <script src="../js/bootstrap-datepicker.js"></script> 
    <script src="../js/jquery.timepicker.min.js"></script> 

    

    <script src="../js/main.js"></script>
  </body>
</html>