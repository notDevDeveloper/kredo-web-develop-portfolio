<?php

    $id = $_GET['id'];
    require '../classes/customer.php';
    $customer = new Customer;
    $customers = $customer->displayOneCustomer($id);
    
    
    if(isset($_POST['edit'])){
        $customer_name = $_POST['name'];
        $customer_phone = $_POST['phone'];
        $customer_mail = $_POST['mail'];
        $customer_password = $_POST['pass'];
        $customer_address = $_POST['address'];
        $customer_gender = $_POST['gender'];
        $customer_age = $_POST['age'];

        $result = $customer->updateCustomer($customer_name,$customer_phone,$customer_mail,$customer_password,$customer_address,$customer_gender,$customer_age,$id);
        if($result){
            header('Location: customer_table.php');
        }else{
            echo "Unsuccessful!";
        }
    }
    $status = array("Usable","Slightly Usable","Not Usable");


?>





<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel customer edit</title>
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

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="../index.html">Hotel</a></div>
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
                        <li><a href="reservation_table.php">Reservation</a></li>
                        <li  class="active"><a href="customer_table.php">Customer</a></li>
                        <li><a href="login.php"></a>Login<li>
                        <li><a href="logout"></a>Logout</li>
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
            <h1 class="heading mb-3">Customer Edit</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>Sign up</li>
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
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
                <h3 class="text-center">Please Your Information</h3>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="<?php echo $customers['customer_name'];?>" required>
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="phone">Phone</label>
                  <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $customers['customer_phone'];?>" required>
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" name="mail" id="email" class="form-control" value="<?php echo $customers['customer_mail'];?>" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="password">Password</label>
                  <input type="text" name="pass" id="password" class="form-control" value="<?php echo $customers['customer_password'];?>" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="text">Address</label>
                  <input type="text" id="text" name="address" class="form-control" value="<?php echo $customers['customer_address'];?>" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="">Gender</label>
                  <select name="gender" id="" class="form-control" value="<?php echo $customers['customer_gender'];?>" required>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="">Age</label>
                  <input type="number" name="age" id="" class="form-control" value="<?php echo $customers['customer_age'];?>" required>
                </div>
              </div>
              <!-- <a href="" type="submit" name="edit" value="edit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">Edit</a> -->
              <div class="form-group">
                <div class="row">
                  <input type="submit" name="edit" value="Edit" class="btn btn-primary text-white py-3 px-5 font-weigjt-hold">
                  <a class="btn btn-outline-dark" href="customer_table.php" role="button">Close</a>
                </div>
              </div>
            </form>
           </div>
          </div>
         </div>
        </div>
      </div>
    </section>

    
    
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