<?php

    require '../classes/customer.php';
    $customer = new Customer;

    session_start();
    $id = $_SESSION['id'];

    $customers = $customer->displayOneCustomer($id);

    if(isset($_POST['submit'])){
        $customer->deleteCustomer($id);
        header('Location: index.php');
      }


?>


<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel reservetion cansell</title>
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
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.php">Hotel</a></div>
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
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="reservation_table.php">Reservation</a></li>
                        <li><a href="customer.php">Customer</a></li>
                        <li><a href="login.php">login</a></li>
                        <li><a href="login.php">logout</a></li>
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

    <section class="site-hero overlay" style="background-image: url(../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3">Hello</span>
            <h1 class="heading">Let's work hard today</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <br>
            <br>
     <!-- END section -->
     <body>
     <div class="container">
        <div class="junbotron">
            <div class="container-fluid py-3">
                <h1>Customer Delete</h1>
            </div>
        </div>
        <form action="" method="post" >
            <h4 class="">Really agree with this information？</h4>
            <h4>Please confirm last</h4>            
            <p class="">
                 Name     : <?php echo $customers['customer_name'];?><br>
                 Phone    : <?php echo $customers['customer_phone'];?><br>
                 Maile    : <?php echo $customers['customer_mail'];?><br>
                 Password : <?php echo $customers['customer_password'];?><br>
                 Address  : <?php echo $customers['customer_address'];?><br>
                 Gender   : <?php echo $customers['customer_gender'];?><br>
                 Age      : <?php echo $customers['customer_age'];?><br>


                 <!-- <?php echo $details['reservation_check_in'];?><br>  -->
                <!-- <?php echo $details['reservation_check_out'];?><br> -->
            </p>                    
            <p class="">’Are you sure you want to erase it?’</p>
            <!-- <div class="form-group">
                <label for="">Type Here</label>
                <input type="text" name="confirm" id="" class="form-control">
            </div> -->
            <div class="row">
                <div class="form-group">
                    <div class="text-center">
                        <input type="submit" value="Delete" name="submit" class="btn btn-danger col-6 btn-sm pull-right form-control">
                        <a class="btn btn-dark col-6 btn-sm text-white form-control" href="account.php" role="button">Back</a>
                    </div>  
                </div>
            </div>
        </form>
    </div>
    <br><br><br>


    
    </section>
    <!-- END section -->
    
    
    
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