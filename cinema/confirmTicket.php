<?php


    $id = $_GET['id'];
    $date = $_GET['date'];
    $time = $_GET['time'];
    $ticket_child = $_GET['child'];
    $ticket_adult = $_GET['adult'];
    $ticket_student = $_GET['student'];
    $ticket_total = $_GET['total'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $price_child = $ticket_child * 300;
    $price_student = $ticket_student * 500;
    $price_adult = $ticket_adult * 700;
    $price = $price_child+ $price_student + $price_adult;
    // $pass = $_GET['pass'];
    require 'functions/movie.php';
    $movie = new Movie;
    $oneMovie = $movie->displayOneMovie($id);
    if(isset($_POST['submit'])){
        $movie_id = $_GET['id'];
        $date = $_GET['date'];
        $time = $_GET['time'];
        $ticket_child = $_GET['child'];
        $ticket_adult = $_GET['adult'];
        $ticket_student = $_GET['student'];
        $ticket_total = $_GET['total'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        //$price = ($ticket_child*300)+ ($ticket_student*500) + ($ticket_adult*700);
        $user_id =0;
        // $pass = $_POST['pass'];
        $movie -> addTicket($user_id,$name,$email,$movie_id,$date,$time,$ticket_child,$ticket_student,$ticket_adult,$ticket_total,$price);
        header('Location: index.php');
    }

    


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Deejee &mdash; Colorlib Website Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/mediaelementplayer.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/fl-bigmug-line.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <style>
      .submit{
          text-align: center;
          margin-top: 5%;
      }
  </style>

</head>

<body>



  <div class="site-wrap">

    <div class="site-navbar mt-4">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Cinema<span
                    class="text-primary">.</span></strong></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="active has-children">
                    <a href="#">Movie</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="selectdate.php">Schedule</a></li>
                      <li><a href="nowplaying.php">Now Playing</a></li>
                      <li><a href="#">Coming Soon</a></li>
                      <li><a href="ranking.php">Ranking</a></li>
                    </ul>
                  </li>
                  <li><a href="events.html">News</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  
                </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div> <!-- .site-mobile-menu -->

  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/ave.jpg');"
    data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">

          <h1 class="text-white">Confirm Ticket</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
        <h1 class="my-4 text-white">Confirm Ticket</h1>
        <form action="#" method="post" class="contact-form">
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Title : </label>
                <?php echo $oneMovie['movie_title']; ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Date : </label>
                <?php echo $date; ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Time : </label>
                <?php echo $time; ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Ticket : </label>
                <?php 
                    
                    echo "Child & Sinior : ".$ticket_child;
                    echo "  /  Student : ".$ticket_student;
                    echo "  /  Adult : ".$ticket_adult;
                    echo "  /  TOTAL : ".$ticket_total;
                 ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">TOTAL PRICE : </label>
                <?php echo $price; ?>
                </div>
            </div>
            

            
            <div class="row form-group">
                <div class="col-md-12">
                    <?php echo "<a href='user_edit.php?id=".$id."&date=".$date."&time=".$time."&child=".$ticket_child."&adult=".$ticket_adult."
                &student=".$ticket_student."&total=".$ticket_total."&name=".$name."&email=".$email."' role='button' class='btn btn-warning  py-2 w-25 mt-4'>Edit</a>";?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                <input type="submit" value="BUY TICKET" name="submit" class="btn btn-primary py-2 w-25 px-3 mt-4">
                </div>
            </div>


        </form>
  
    </div>
  
    
  </div>
  
  </div>




  <div class="bg-primary" data-aos="fade">
    <div class="container">
      <div class="row">
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-facebook text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-instagram text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-linkedin text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-pinterest text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
      </div>
    </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <h3 class="footer-heading mb-4">About Deejee</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque,
              consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima
              minus odio!</p>
          </div>
          <div class="mb-5">
            <h3 class="footer-heading mb-4">Subscribe</h3>
            <form action="#" method="post" class="site-block-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent"
                  placeholder="Enter your email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary rounded-top-right-0" type="button"
                    id="button-addon2">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">DJs</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Top 20 of the week</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Membership</a></li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Follow Us</h3>

              <div>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="mb-5">
            <h3 class="footer-heading mb-4">Watch Live Streaming</h3>

            <div class="block-16">
              <figure>
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>
              </figure>
            </div>

          </div>



        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
            <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
              target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>

</body>

</html>