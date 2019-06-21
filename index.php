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
    <title>Mr.Teach</title>
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
	<style>
		.red{
			color:red;
		}
	</style>
  <body>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="index.php">Mr.<span>teach</span></a>
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
	        	<li class="nav-item active"><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
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
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/Tutor_home_1.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
            <h1 class="mb-4" style = "color: #fc602f " >Helping Your <span>Study Life</span></h1>
            <!-- <h3 class="subheading">Everyday We Bring Hope and Smile to the Student We Serve</h3> -->
            <!-- <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p> -->
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/Tutor_home_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
            <h1 class="mb-4" style = "color: #fc602f ">We Care <span>About Your Study</span></h1>
            <!-- <h3 class="subheading">Your Mind is Our Top Priority with Comprehensive, Affordable medical.</h3> -->
            <!-- <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p> -->
          </div>
        </div>
        </div>
      </div>
		</section>
		

		<br><br><br><br><br>

		
		<!-- <section class="ftco-section ftco-no-pt ftc-no-pb">
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
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style = "background-color: #fc8e2fd9 "><i class="fas fa-envelope-open-text" style = "font-size : 30px;"></i></div>
										<div class="text">
											<h3>Real-world projects from industry experts</h3>
											<p>With real world projects and immersive content built in partnership with top tier companies, you’ll master the tech skills companies want.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style = "background-color: #fc8e2fd9 "><i class="fas fa-chalkboard-teacher" style = "font-size : 30px;"></i></div>
										<div class="text">
											<h3>1-on-1 technical mentor</h3>
											<p>Get a knowledgeable mentor who guides your learning and is focused on answering your questions, motivating you and keeping you on track.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style = "background-color: #fc8e2fd9 "><i class="fas fa-briefcase" style = "font-size : 30px;"></i></div>
										<div class="text">
											<h3>Personal career coach and career services</h3>
											<p>You’ll have access to career coaching sessions, interview prep advice, and resume and online professional profile reviews to help you grow in your career.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style = "background-color: #fc8e2fd9 "><i class="far fa-clock" style = "font-size : 30px;"></i></div>
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
		</section> -->

		
		<!-- <section class="ftco-intro" style="background-image: url();" data-stellar-background-ratio="0.5">
			<div class="overlay" style = "background-color: #ea4708 "></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>We Provide Free Consultation</h2>
						<p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
						<p></p>
					</div>
					<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0"><a href="appointment.html" class="btn btn-secondary px-4 py-3" style ="border: 1px solid #fff ;">Free Consutation</a></p>
					</div>
				</div>
			</div>
		</section> -->

		
		
		<section class="ftco-services ftco-no-pb">
			<div class="container">
				<div class="col-md-12 text-center heading-section ftco-animate">
					<span class="subheading">Feature</span>
					<h2 class="mb-4">Our Features</h2>
				</div>
				<div class="row no-gutters">
					<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" style = "background-color: #fc762f " >
						<div class="media block-6 d-block text-center" >
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="fas fa-chalkboard-teacher"></span>
							</div>
							<div class="media-body p-2 mt-3" >
								<h3 class="heading">Qualitfied Teachers</h3>
								<p>Get a knowledgeable mentor who guides your learning and is focused on answering your questions, motivating you and keeping you on track.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" style = "background-color: #fc602f ">
						<div class="media block-6 d-block text-center">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="fas fa-chalkboard"></span>
							</div>
							<div class="media-body p-2 mt-3">
								<h3 class="heading">Various Courses</h3>
								<p>With real world projects and immersive content built in partnership with top tier companies, you’ll master the tech skills companies want.</p>
							</div>
						</div>    
					</div>
					<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" style = "background-color: #fc762f ">
						<div class="media block-6 d-block text-center">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="far fa-thumbs-up"></span>
							</div>
							<div class="media-body p-2 mt-3">
								<h3 class="heading">Good Performance</h3>
								<p>Match your goals to our programs, explore your options, and map out your path to success.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" style = "background-color: #fc602f ">
						<div class="media block-6 d-block text-center">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="fas fa-hand-holding-usd"></span>
							</div>
							<div class="media-body p-2 mt-3">
								<h3 class="heading">Good Prices</h3>
								<p>A fair and reasonable price is the price point for a good or service that is fair to both parties involved in the transaction.</p>
							</div>
						</div>      
					</div>
				</div>
			</div>
		</section><br><br>
		
		<!-- <section class="ftco-section ftco-no-pt">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
					<div class="col-md-8 text-center heading-section ftco-animate">
						<span class="subheading">Doctors</span>
						<h2 class="mb-4"><a href = "doctor.html">➡︎Our Qualified Teachers</a></h2>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/tutor_1.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. Lloyd Wilson</h3>
								<span class="position mb-2">Neurologist</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/tutor_2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. Rachel Parker</h3>
								<span class="position mb-2">Ophthalmologist</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/tutor_3.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. Ian Smith</h3>
								<span class="position mb-2">Dentist</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/tutor_4.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. Alicia Henderson</h3>
								<span class="position mb-2">Pediatrician</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<!-- <span class="subheading">Courses</span> -->
            <h2 class="mb-4"><a href ="about.php">➡︎About</a></h2>
            <p>Click here for detailsClick here for details</p>
          </div>
        </div>
    		<div class="ftco-departments">
				</div>
    	</div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Teacher</span>
            <h2 class="mb-4"><a href="teacher.php">➡︎Qualified Teacher</a></h2>
            <p>We guarantee the quality of the teachers we provide.<br><span class="red">You can choose the teacher you want from here.<span></p>
          </div>
        </div>
    		<div class="ftco-departments">
				</div>
    	</div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Service</span>
            <h2 class="mb-4"><a href ="service.php">➡︎Various Service</a></h2>
            <p>We offer you various services.<br>You gain knowledge of the areas you want to learn.</p>
          </div>
        </div>
    		<div class="ftco-departments">
				</div>
    	</div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Countact</span>
            <h2 class="mb-4"><a href="contact.php">➡︎Contact Us</a></h2>
            <p>Please feel free to ask if you have any questions.</p>
          </div>
        </div>
    		<div class="ftco-departments">
				</div>
    	</div>
    </section>

    <!-- <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Courses</span>
            <h2 class="mb-4">Various Courses</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
    		<div class="ftco-departments"> -->				
					<!-- <div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active"  id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Reading</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Listening</a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Speaking</a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Writting</a>

	              <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Business</a>

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">

	              <div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-1.jpg);"></div>
	              		</div>
	              		<div class="col-lg-8">
	              			<h2>Reading</h2>
	              			<p>
													We will learn a wide range of IT basics, and will actually create a website in English using the learned skills. At the same time, learn how to use design tools to become a web designer who specializes in design, or learn more about programming languages ​​to become a web programmer, or an introductory person who can confirm the direction to be aimed as an IT human resource It is also a course.</p>
											<div class="row mt-5 pt-2">
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-html5" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>HTML</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-css3-alt" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>CSS</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-wordpress" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>Wordpress</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-adobe" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>Photoshop & illustrator</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
											</div>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-2.jpg);"></div>
	              		</div>
	              		<div class="col-md-8">
	              			<h2>Listening</h2>
	              			<p>The "WEB Design Course" is an upstream course of the "WEB Basic Course", where you can practice more complex WEB design and advanced coding practices. Furthermore, it is a course to acquire the skill of the web designer who becomes an immediate force through the production of a dynamic website.</p>
											<div class="row mt-5 pt-2">
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-html5" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>HTML</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-css3-alt" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>CSS</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-js" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>Java Script</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-file-code" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>JQuery</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
											</div>
	              		</div>
	              	</div>
	              </div>
	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-3.jpg);"></div>
	              		</div>
	              		<div class="col-md-8">
	              			<h2>Speaking</h2>
	              			<p>In the "WEB Development Course", based on the basic skills learned in "WEB Basic Course", you will learn applied WEB production skills using PHP, MySQL, Bootstrap. Also, you will learn to manage programming history using Git, and you will be able to create a web service from 0 with your own power.</p>
											<div class="row mt-5 pt-2">
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-bootstrap" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>bootstrap</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-git-square" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>git</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-php" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>php</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-database" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>mysql</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
											</div>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-4.jpg);"></div>
	              		</div>
	              		<div class="col-md-8">
	              			<h2>Writting</h2>
	              			<p>This is a real-world special study abroad course taught by active engineers under cooperation from the offshore development company Sun *. You will learn web application development skills by learning Japanese-originated highly versatile programming language "Ruby" and framework "Ruby on Rails". Also, Ruby / Ruby on Rails is often adopted by IT venture companies, so it is recommended for those who want to work in IT venture companies.</p>
											<div class="row mt-5 pt-2">
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-html5" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>html</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-css3-alt" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>css</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-gem" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>ruby</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-file-code" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>ruby on rails</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
											</div>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-5.jpg);"></div>
	              		</div>
	              		<div class="col-md-8">
	              			<h2>Business</h2>
	              			<p>
													"AI (Artificial Intelligence) Course" learns the popular programming language "Python" in the field of machine learning, and helps you to take the first step towards cutting-edge IT personnel. In the class we will develop web applications and machine learning systems. You will also learn how to use the database required to create a web application.</p>
											<div class="row mt-5 pt-2">
												<div class="col-md-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fab fa-python" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>Python</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-file-alt" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>oop</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-file-code" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>frask</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fas fa-database" style ="font-size:50px;"></span></div>
														<div class="text">
															<h3>mysql</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
											</div>
	              		</div>
	              	</div>
	              </div>
	            </div>
	          </div>
	        </div> -->
        <!-- </div>
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

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url();" data-stellar-background-ratio="0.5">
    	<div class="container">
    			<!-- <div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Consultation</span>
	            <h2 class="mb-4">Free Consultation</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	          </div>
	          <form action="#" class="appointment-form ftco-animate">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                      	<option value="">Select Your Services</option>
                        <option value="">Neurology</option>
                        <option value="">Cardiology</option>
                        <option value="">Dental</option>
                        <option value="">Ophthalmology</option>
                        <option value="">Other Services</option>
                      </select>
                    </div>
		              </div>
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
    			</div> -->
    			<div class="p-5 bg-counter aside-stretch heading-section">
							<span class="subheading text-center">Performance</span>
						<h2 class = "text-center" style = "color: #fc602f ">Our Performance</h2>
						<h3 class="vr">About Mr.teach Facts</h3>
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
		                <strong class="number" style = "color : #fc602f;"  data-number="100">0</strong>
		                <span>Happy Students</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" style = "color : #fc602f;" data-number="<?php echo $students['student']; ?>">0</strong>
		                <span>Number of Student</span>
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
		</section>
		
		<!-- <div class="row justify-content-center my-5 pb-2">
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
            </ul> -->
            <!-- <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3" style ="background-color: #fc972f;">Get Offer</a></p> -->
          <!-- </div>
        </div> -->
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
      <!-- </div>
    </div>
  </section><br><br><br><br> -->



    <!-- <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Pricing</span>
            <h2 class="mb-4"><a href = "pricing.html">➡︎Our Pricing</a></h2>
            <p>You can choose from various rate plans depending on your learning frequency and the service you seek.</p>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Basic</h3>
	        			<p><span class="price">$24.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
								<li>Professional Consultation</li>
								<li>Tooth Implants</li>
								<li>Surgical Extractions</li>
								<li>Teeth Whitening</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Standard</h3>
	        			<p><span class="price">$34.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
								<li>Professional Consultation</li>
								<li>Tooth Implants</li>
								<li>Surgical Extractions</li>
								<li>Teeth Whitening</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="pricing-entry active pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Premium</h3>
	        			<p><span class="price">$54.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
								<li>Professional Consultation</li>
								<li>Tooth Implants</li>
								<li>Surgical Extractions</li>
								<li>Teeth Whitening</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Platinum</h3>
	        			<p><span class="price">$89.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
								<li>Professional Consultation</li>
								<li>Tooth Implants</li>
								<li>Surgical Extractions</li>
								<li>Teeth Whitening</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        		</div>
        	</div>
        </div>
    	</div>
    </section> -->

		<!-- <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Blog</span>
            <h2 class="mb-4"><a href ="blog.php">➡︎Recent Blog</a></h2>
            <p>This is a blog that we send out regularly. You can get various information here.</p>
          </div>
        </div>
				<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">23</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">23</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">23</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section> -->

		
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
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