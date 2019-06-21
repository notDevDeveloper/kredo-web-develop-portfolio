<?php 

session_start();
if(empty($_SESSION)){
    header('Location: login.php');
}
echo "Welcome ".$_SESSION['name'].".Please help yourself";
echo "<a href='logout.php'>Logout</a>";

require 'function/Stock.php';
$stock = new Stock;
$students = $stock->displayUserCount();
$teachers = $stock->displayTeacherCount();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dr.care - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  </head>
  <body>
  <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="index.html">Mr.<span>teach</span></a>
	    		</div>
	    		<div class="col-lg-10 d-none d-md-block">
		    		<div class="row d-flex">
			    		<div class="col-md-4 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Address: 198 West 21th Street, Suite 721 New York NY 10016</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">Email: youremail@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">Phone: + 1235 2355 98</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </nav>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0 mr-2"><a href="waste_login.php" class="btn btn-secondary py-2 px-3">Login</a></p> -->
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.php" class="btn btn-danger py-2 px-3">Apply An Application</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="teacher.php" class="nav-link">Teacher</a></li>
	        	<!-- <li class="nav-item"><a href="appointment.php" class="nav-link">Appointment</a></li> -->
	        	<li class="nav-item"><a href="service.php" class="nav-link">Service</a></li>
	        	<!-- <li class="nav-item"><a href="waste_price.php" class="nav-link">Pricing</a></li> -->
	        	<!-- <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/Tutor_home_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay" style = "background-color: #fc602f "></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/about_2.jpg);">
            </div>
            <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
              <div class="heading-section mb-5">
                <div class="pl-md-5 ml-md-5">
                  <span class="subheading">About Dr.care</span>
                  <h2 class="mb-4" style="font-size: 28px;">Welcome To Mr.teach Is A Specialized Business Consulting</h2>
                </div>
              </div>
              <div class="pl-md-5 ml-md-5 mb-5">
                <p>Build portfolio-ready projects, learn new tools, and advance your career as a developer, in the School of Programming. Study programs developed with industry leaders, and learn the skills for careers in areas such as Blockchain and Full Stack development.</p>
                <div class="row mt-5 pt-2">
                  <div class="col-lg-6">
                    <div class="services-2 d-flex">
                      <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style = "background-color: #fc8e2fd9 "><i class="fas fa-envelope-open-text" style = "font-size: 30px ;"></i></div>
                      <div class="text">
                        <h3>Real-world projects from industry experts</h3>
                        <p>With real world projects and immersive content built in partnership with top tier companies, you’ll master the tech skills companies want.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="services-2 d-flex">
                      <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style = "background-color: #fc8e2fd9 "><i class="fas fa-chalkboard-teacher" style = "font-size: 30px ;"></i></div>
                      <div class="text">
                        <h3>1-on-1 technical mentor</h3>
                        <p>Get a knowledgeable mentor who guides your learning and is focused on answering your questions, motivating you and keeping you on track.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="services-2 d-flex">
                      <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style = "background-color: #fc8e2fd9 "><i class="fas fa-briefcase" style = "font-size: 30px ;"></i></div>
                      <div class="text">
                        <h3>Personal career coach and career services</h3>
                        <p>You’ll have access to career coaching sessions, interview prep advice, and resume and online professional profile reviews to help you grow in your career.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="services-2 d-flex">
                      <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style = "background-color: #fc8e2fd9 "><i class="far fa-clock" style = "font-size: 30px ;"></i></div>
                      <div class="text">
                        <h3>Flexible learning options</h3>
                        <p>Get a custom learning plan tailored to fit your busy life. Along with easy monthly payments you can learn at your own pace and reach your personal goals.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><br><br>
		
		<!-- <section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>We Provide Free Health Care Consultation</h2>
						<p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
						<p></p>
					</div>
					<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Free Consutation</a></p>
					</div>
				</div>
			</div>
		</section> -->
		
		
    <!-- <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonials</span>
            <h2 class="mb-4">Our Patients Says About Us</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Farmer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Students</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_4.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Striper</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"  style="background-image: url();" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
          <div class="col-lg-12 p-5 bg-counter aside-stretch">
            <h3 class="vr">About Dr.Care Facts</h3>
    				<div class="row pt-4 mt-1">
              <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 p-5 bg-light">
                  <div class="text">
                    <strong class="number" style = "color : #fc602f;" data-number="5">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 p-5 bg-light">
                  <div class="text">
                    <strong class="number" style = "color : #fc602f;" data-number="100">0</strong>
		                <span>Happy Students</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 p-5 bg-light">
                  <div class="text">
                    <strong class="number" style = "color : #fc602f;" data-number="<?php echo $students['student']; ?>"></strong>
		                <span>Number of Students</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 p-5 bg-light">
                  <div class="text">
                    <strong class="number" style = "color : #fc602f;" data-number="<?php echo $teachers['teacher']; ?>">0</strong>
		                <span>Number of Teachers</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
      <!-- <section class="ftco-section">
          <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
              <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Consultlation</span>
                <h2 class="mb-4"><a href = "department.html">➡︎Free Consultation</a></h2>
                <p>We provides you various course. You can chose course from various courses.</p>
              </div>
            </div>
          </div>
      </section> -->
      <!-- <section class="ftco-section">
          <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
              <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Appointment</span>
                <h2 class="mb-4"><a href = "appointment.php">➡︎Appointment Form</a></h2>
                <p>We provides you various course. You can chose course from various courses.</p>
              </div>
            </div>
          </div>
      </section> -->

      <div class="row justify-content-center my-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <span class="subheading" id ="price">Pricing</span>
          <h2 class="mb-4" style ="color : #fb572e ;">Our Pricing</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row justify-content-center my-5 pb-2">
        <div class="col-md-8 heading-section text-center ftco-animate">
          <div class="pricing-entry pb-5 text-center">
            <div>
              <h3 class="mb-4">Standard</h3>
              <p><span class="price" style ="color: #fc602f;">$20.00</span> <span class="per">/ hour</span></p>
            </div>
            <ul>
              <li>Diagnostic Services</li>
              <li>Professional Consultation</li>
              <li>Tooth Implants</li>
              <li>Surgical Extractions</li>
              <li>Teeth Whitening</li>
            </ul>
            <!-- <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3" style ="background-color: #fc972f;">Get Offer</a></p> -->
          </div>
        </div>
        <!-- <div class="col-md-3 ftco-animate">
          <div class="pricing-entry pb-5 text-center">
            <div>
              <h3 class="mb-4">Standard</h3>
              <p><span class="price" style ="color: #fc602f;">$34.50</span> <span class="per">/ session</span></p>
            </div>
            <ul>
              <li>Diagnostic Services</li>
              <li>Professional Consultation</li>
              <li>Tooth Implants</li>
              <li>Surgical Extractions</li>
              <li>Teeth Whitening</li>
            </ul>
            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3" style ="background-color: #fc972f;">Get Offer</a></p>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="pricing-entry active pb-5 text-center">
            <div>
              <h3 class="mb-4">Premium</h3>
              <p><span class="price" style ="color: #fc602f;">$54.50</span> <span class="per">/ session</span></p>
            </div>
            <ul>
              <li>Diagnostic Services</li>
              <li>Professional Consultation</li>
              <li>Tooth Implants</li>
              <li>Surgical Extractions</li>
              <li>Teeth Whitening</li>
            </ul>
            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3" style ="background-color: #fc972f;">Get Offer</a></p>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="pricing-entry pb-5 text-center">
            <div>
              <h3 class="mb-4">Platinum</h3>
              <p><span class="price" style ="color: #fc602f;">$89.50</span> <span class="per">/ session</span></p>
            </div>
            <ul>
              <li>Diagnostic Services</li>
              <li>Professional Consultation</li>
              <li>Tooth Implants</li>
              <li>Surgical Extractions</li>
              <li>Teeth Whitening</li>
            </ul>
            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3" style ="background-color: #fc972f;">Get Offer</a></p>
          </div>
        </div> -->
      </div>
    </div>
  </section><br><br><br><br>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="teacher.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Teachers</a></li>
                <li><a href="service.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">Mr.<span>teach</span></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
          </div>
            </div>

	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            <!-- <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Courses</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Web Basic</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Web Design</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Web Develop</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Ruby on Rails</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Python</a></li>
              </ul>
            </div> -->
          <!-- <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
          	<div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Opening Hours</h2>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>