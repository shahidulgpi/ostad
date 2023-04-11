<?php include 'include/head.php';?>

<body id="body">

  <!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <!-- logo -->
      <a class="navbar-brand logo" href="index.php">
        <img loading="lazy" class="logo-default" src="images/logo.png" alt="logo" />
        <img loading="lazy" class="logo-white" src="images/logo-white.png" alt="logo" />
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="index.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"> Homepage </a>          
		  </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="service.php">Services</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>            
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>         
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->	

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Contact Us</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				</ol>
			</div>
		</div>
	</div>
</section>

 <!--Start Contact Us
	=========================================== -->
 <section class="contact-us" id="contact">
 	<div class="container">
 		<div class="row justify-content-center">
			 <!-- section title -->
 			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Get In Touch</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam
						ut numquam molestiae quaerat incidunt?</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>
 		<div class="row">
 			<!-- Contact Details -->
 			<div class="contact-details col-md-6 ">
 				<h3 class="mb-3">Contact Details</h3>
 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex
 					explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore
 					adipisci.</p>
 				<ul class="contact-short-info mt-4">
 					<li class="mb-3">
 						<i class="tf-ion-ios-home"></i>
 						<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
 					</li>
 					<li class="mb-3">
 						<i class="tf-ion-android-phone-portrait"></i>
 						<span>Phone: +880-31-000-000</span>
 					</li>
 					<li class="mb-3">
 						<i class="tf-ion-android-globe"></i>
 						<span>Fax: +880-31-000-000</span>
 					</li>
 					<li>
 						<i class="tf-ion-android-mail"></i>
 						<span>Email: hello@meghna.com</span>
 					</li>
 				</ul>
 				<!-- Footer Social Links -->
 				<div class="social-icon">
 					<ul>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble-outline"></i></a></li>
 						<li><a href="https://themefisher.com/"><i class="tf-ion-social-linkedin-outline"></i></a></li>
 					</ul>
 				</div>
 				<!--/. End Footer Social Links -->
 			</div>
 			<!-- / End Contact Details -->

 			<!-- Contact Form -->
 			<div class="contact-form col-md-6 ">
 				<form id="contact-form" method="post" role="form">
 					<div class="form-group mb-4">
 						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name" required>
 					</div>

 					<div class="form-group mb-4">
 						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email" required>
 					</div>
 					<div class="form-group mb-4">
 						<input type="number" placeholder="Your Mobile " class="form-control" name="mobile" id="mobile" required>
 					</div>

 					<div class="form-group mb-4">
 						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required>
 					</div>

 					<div class="form-group mb-4">
 						<textarea rows="3" placeholder="Message" class="form-control" name="message" id="message" required></textarea>
 					</div>
 					<div id="cf-submit">
 						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
 					</div>

 				</form>
 			</div>
 			<!-- ./End Contact Form -->

 		</div> <!-- end row -->
 	</div> <!-- end container -->
 </section> <!-- end section -->

 <!--================================
=            Google Map            =
=================================-->
<div class="google-map">
	<div id="map_canvas" class="map_canvas" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Bingo"></div>
</div>
 <!--====  End of Google Map  ====-->

 <?php include 'include/footer.php';?>
<?php include 'include/scripts.php';?>