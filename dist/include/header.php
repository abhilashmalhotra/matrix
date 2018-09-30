
<header class="top_strip">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-8">
				<a href="javascript:void(0)" class="address"><i class="fas fa-map-marked"></i> Matrix Dental and Skin Lounge, 70, Poorvi Marg, Opposite Modern School, Vasant Vihar , New Delhi-110057  </a>
			</div>
			<div class="col-md-4">
				<ul class="list-inline social_network">
					<li class="list-inline-item"><a href="javascript:void(0)" class="icon facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void(0)" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a></li>

					<li class="list-inline-item"><a href="javascript:void(0)" class="icon twitter"><i class="fab fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void(0)" class="icon google"><i class="fab fa-google"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void(0)" class="icon youtube"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
<header class="matrix_header">	
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="images/logo.png" width="" class="d-inline-block align-top logo_img" alt="">
			</a>
			<button class="navbar-toggler ma5menu__toggle btn" type="button">
				<i class="fas fa-bars"></i>					
			</button>
			<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button> -->
			<div class="collapse navbar-collapse" id="">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">						
						<div class="top_actions row align-items-center">
							<div class="icon col-2"><i class="fas fa-mobile-alt fa-2x"></i></div>
							<div class="info col-10">
								<a href="javascript:void(0)" class="d-block">+91-8826001000</a>
								<a href="javascript:void(0)" class="d-block">+91-8826002000</a>
							</div>
						</div>
						
					</li>
					<li class="nav-item active">
						<div class="top_actions row align-items-center mt-1">
							<div class="icon col-2"><i class="fas fa-envelope fa-2x"></i></div>
							<div class="info col-10">
								<a href="javascript:void(0)" class="d-block">clinicmatrix@gmail.com</a>								
							</div>
						</div>
						
						
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
</header>
<header class="main_menu">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item <?= ($activePage == 'about') ? 'active':''; ?>">
					<a class="nav-link" href="about.php">About Us</a>
				</li>
				<!-- <li class="nav-item dropdown first-level">
					<a class="nav-link menu-toggle" href="dental-services.php">Dental Services</a>
					<div class="dropdown-menu first-level" aria-labelledby="dropdown03" style="display: block">
						<a class="dropdown-item" href="our-aim.php">Our Aim</a>
						<a class="dropdown-item" href="our-process.php">Our Process</a>
						<a class="dropdown-item" href="our-team.php">Our Team</a>
					</div>
				</li> -->

				<li class="nav-item <?= ($activePage == 'dental-services') ? 'active':''; ?>">
					<a class="nav-link" href="dental-services.php">Dental Services</a>
				</li>
				<li class="nav-item <?= ($activePage == 'skin-services') ? 'active':''; ?>">
					<a class="nav-link" href="skin-services.php">Skin Services</a>
				</li>
				<li class="nav-item <?= ($activePage == 'dental-treatment-cost') ? 'active':''; ?>">
					<a class="nav-link" href="dental-treatment-cost.php">Prices</a>
				</li>
				<li class="nav-item <?= ($activePage == 'photo-gallery') ? 'active':''; ?>">
					<a class="nav-link" href="photo-gallery.php">Gallery</a>
				</li>
				<li class="nav-item <?= ($activePage == 'faq-dental') ? 'active':''; ?>">
					<a class="nav-link" href="faq-dental.php">FAQ</a>
				</li>
				<li class="nav-item <?= ($activePage == 'contact') ? 'active':''; ?>">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
				<li class="nav-item <?= ($activePage == 'clinic-tour') ? 'active':''; ?>">
					<a class="nav-link" href="clinic-tour.php">Clinic Tour</a>
				</li>
				<li class="nav-item <?= ($activePage == 'feedback') ? 'active':''; ?>">
					<a class="nav-link" href="feedback.php">Feedback</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#requestAppointment"><i class="far fa-calendar-alt"></i>  Request An Appointment</a>
				</li>
			</ul> 
		</div>
	</nav>
</header>

<!-- Mobile Menu -->
<nav class="ma5menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<div class="ma5menu__header">
		<a class="ma5menu__home" href="index.html" tabindex="-1">
			<!-- <svg class="ma5menu__logo" aria-hidden="true" width="24" height="24"><use xlink:href="images/svg/material.svg#terrain"></use></svg> -->
		</a>
		<a class="ma5menu__toggle" tabindex="-1">
			<i class="fas fa-long-arrow-alt-left ma5menu__close" aria-hidden="true"></i>
		</a>
	</div>
	<!-- 'ma5menu__panel--active' - unordered-list which has active list-item and is closest to him in menu tree (only one for menu) -->
	<!-- At Home page active link set as first in menu tree -->
	<ul class="lvl-0 ma5menu__panel--active" data-ma5order="ma5-ul">
		<!-- 'ma5menu__li--current' - current list-item wchich is closest to active link in menu tree (only one for menu) -->
		<li class="ma5menu__li--current" data-ma5order="ma5-li-1">
			<a href="index.php"><i class="fas fa-home"></i> Home</a>
			<!-- Use class 'ma5menu__path' when you need colored link or category, for example to active link or path links -->
			<!-- <span class="ma5menu__btn--enter ma5menu__category ma5menu__path"><i class="fas fa-home"></i> Home</span> -->
			<!-- <ul class="lvl-1" data-ma5order="ma5-ul-1">
				<li data-ma5order="ma5-li-1-1">
					<div class="ma5menu__leave"><span class="ma5menu__btn--leave"></span>About Us</div>
					<span class="ma5menu__btn--enter ma5menu__category ">Years</span>
					<ul class="lvl-2" data-ma5order="ma5-ul-1-1">
						<li data-ma5order="ma5-li-1-1-1">
							<div class="ma5menu__leave"><span class="ma5menu__btn--leave"></span>Years</div>
							<a href="index-page.html">Year 1990</a>
						</li>
						<li data-ma5order="ma5-li-1-1-2"><a href="index-page.html">Year 2000</a></li>
						<li data-ma5order="ma5-li-1-1-3"><a href="index-page.html">Year 2005</a></li>
					</ul>
				</li>
				<li data-ma5order="ma5-li-1-2">
					<span class="ma5menu__btn--enter ma5menu__category">Places</span>
					<ul class="lvl-2" data-ma5order="ma5-ul-1-2">
						<li data-ma5order="ma5-li-1-2-1">
							<div class="ma5menu__leave"><span class="ma5menu__btn--leave"></span>Places</div>
							<a href="index-page.html">Paris</a>
						</li>
						<li data-ma5order="ma5-li-1-2-2"><a href="index-page.html">Barcelona</a></li>
						<li data-ma5order="ma5-li-1-2-3"><a href="index-page.html">Pekin</a></li>
					</ul>
				</li>
				<li data-ma5order="ma5-li-1-3"><a href="index-page.html">Branches</a></li>
				<li data-ma5order="ma5-li-1-4"><a href="index-page.html">Programs</a></li>
			</ul> -->
		</li>
		<li data-ma5order="ma5-li-2"><a href="javascript:void(0);"><i class="fas fa-search"></i> About Us</a></li>
		<li data-ma5order="ma5-li-3">
			<span class="ma5menu__btn--enter"></span>
			<a href="#"><i class="fas fa-tooth"></i> Dental Services</a>
			<ul class="lvl-1" data-ma5order="ma5-ul-3">
				<li data-ma5order="ma5-li-3-1">
					<div class="ma5menu__leave"><span class="ma5menu__btn--leave"></span> Dental Services</div>
					<a href="#">Dental Implants</a>
				</li>
				<li data-ma5order="ma5-li-3-2"><a href="#">Root Canal</a></li>
				<li data-ma5order="ma5-li-3-3"><a href="#">Crowning</a></li>
			</ul>
		</li>
		<li data-ma5order="ma5-li-4">
			<span class="ma5menu__btn--enter"></span>
			<a href="#"><i class="fas fa-tooth"></i> Skin Services</a>
			<ul class="lvl-1" data-ma5order="ma5-ul-4">
				<li data-ma5order="ma5-li-4-1">
					<div class="ma5menu__leave"><span class="ma5menu__btn--leave"></span> Skin Services</div>
					<a href="#">Lip Rejuvenation</a>
				</li>
				<li data-ma5order="ma5-li-4-2"><a href="#">Facial Rejuvenation</a></li>
				<li data-ma5order="ma5-li-4-3"><a href="#">Anti-aging Treatments</a></li>
			</ul>
		</li>
		<li data-ma5order="ma5-li-5">
			<a href="javascript:void(0);"><i class="fas fa-cubes"></i> Price</a>
		</li>
		<li data-ma5order="ma5-li-6"><a href="javascript:void(0);"><i class="fas fa-shopping-bag"></i> Gallery</a></li>
		
		<li data-ma5order="ma5-li-5"><a href="javascript:void(0);"><i class="fas fa-cubes"></i> FAQ</a></li>
		<li data-ma5order="ma5-li-7"><a href="javascript:void(0);"><i class="fas fa-map-marker"></i> Contact us</a></li>
		<li data-ma5order="ma5-li-8"><a href="javascript:void(0);"><i class="fas fa-map-marker"></i> Clinic Tour</a></li>
		<li data-ma5order="ma5-li-9"><a href="javascript:void(0);"><i class="fas fa-map-marker"></i> Feedback</a></li>
	</ul>
</nav>