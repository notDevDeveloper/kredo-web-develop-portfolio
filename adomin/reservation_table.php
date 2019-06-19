<?php


    session_start();
    if(empty($_SESSION)){
    header('Location:login.php');

    }


    require '../classes/customer.php';
    $reservation = new Reservation;
    $reservations = $reservation->displayReservation();
    




?>




<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel reservetin</title>
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
                        <li ><a href="index.php">Home</a></li>
                        <li class="active"><a href="reservation_table.php">Reservation</a></li>
                        <li><a href="customer_table.php">Customer</a></li>
                        <li><a href="login.php">login</a></li>
                        <li><a href="logout.php">logout</a></li>
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
        <table class="table table-striped">
            <h1 class="display-3"> Reservation list</h1>
            <br>
            <!-- <div class="row">
                <div class="col-md">
                    <a href="student_insert.php" class="btn btn-info">+Add Student</a>
                </div>
            </div> -->
            <thead class="tect-dark">
                <th>#</th>
                <th>Customer</th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Adult</th>
                <th>Children</th>
                <th>Room Type</th>
                <th>Room Price</th>
                <th></th>
                <th></th>
            </thead>
    
            
            <tbody>
            <?php
                    function day_diff($date1, $date2) {
                      // 日付をUNIXタイムスタンプに変換
                      $timestamp1 = strtotime($date1);
                      $timestamp2 = strtotime($date2);

                      // 何秒離れているかを計算
                      $seconddiff = abs($timestamp2 - $timestamp1);

                      // 日数に変換
                      $daydiff = $seconddiff / (60 * 60 * 24);

                      // 戻り値
                      return $daydiff;
                    }

                    foreach($reservations as $key=>$values){
                        echo "<tr>";
                            echo "<td>".$values['reservation_id']."</td>";
                            echo "<td>".$values['customer_name']."</td>";
                            echo "<td>".$values['reservation_check_in']."</td>";
                            echo "<td>".$values['reservation_check_out']."</td>";
                            echo "<td>".$values['reservation_adult']."</td>";
                            echo "<td>".$values['reservation_children']."</td>";
                            echo "<td>".$values['reservation_room_name']."</td>";

                            // チェックインした日とチェックアウトした日の差分を求めて部屋料金に乗算
                            $stay_days = day_diff($values['reservation_check_in'], $values['reservation_check_out']);
                            $total_price = $stay_days * $values['room_price'];
                            echo "<td>".$total_price."</td>";
                            // echo "<td>".$values['room_price']."</td>"; 
                            echo "<td><a href='reservation_edit.php?id=".$values['reservation_id']."' class='btn btn-warning'><i class = 'fa fa-edit'></i></a></td>";
                            echo "<td><a href='reservation_cansell.php?id=".$values['reservation_id']."' class='btn btn-danger'><i class = 'fa fa-trash'></i></a></td>";
                        echo "</tr>";


                    }
                ?>
            </tbody>
      
            
          </div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    
              

  </div> <!-- .tab-pane -->

            
    </footer> 
    
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