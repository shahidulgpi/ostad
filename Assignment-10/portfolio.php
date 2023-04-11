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
          <li class="nav-item active">
            <a class="nav-link" href="portfolio.php">Portfolio</a>
          </li>          
          <li class="nav-item ">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>          
          <li class="nav-item ">
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
				<h2>Portfolio</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Portfolio</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- Start Portfolio Section
		=========================================== -->

<section class="portfolio section-sm" id="portfolio">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<!-- section title -->
				<div class="title text-center">
					<h2>Our Works</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit amet,
						consectetur adipisicing elit. Minima, vitae? </p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div class="portfolio-filter">
					<button type="button" data-filter="all">All</button>
					<button type="button" data-filter="photography">Photography</button>
					<button type="button" data-filter="ios">IOS App</button>
					<button type="button" data-filter="development">Development</button>
					<button type="button" data-filter="design">Design</button>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="filtr-container">
							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-1.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, ios">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-2.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-2.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography, development">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-3.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-3.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography, ios">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-4.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-4.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-5.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-5.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, development">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-6.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-6.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-7.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-7.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, development">
								<div class="portfolio-block">
									<img class="img-fluid" src="images/portfolio/portfolio-1.jpg" alt="">
									<div class="caption">
										<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
											<i class="tf-ion-ios-search-strong"></i>
										</a>
										<h4><a href="portfolio.html">AirBnB Postcard</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /end col-lg-12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->
<!-- Start Testimonial
=========================================== -->
		
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="images/client-logo/clients-1.jpg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>William Martin</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="images/client-logo/clients-2.jpg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Emma Harrison</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="images/client-logo/clients-3.jpg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Alexander Lucas</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->

<?php include 'include/footer.php';?>
<?php include 'include/scripts.php';?>
