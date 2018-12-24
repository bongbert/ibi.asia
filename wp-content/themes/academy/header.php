<!DOCTYPE html>
<html class="no-js" lang="zxx">
    
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.min.css">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slicknav.min.css">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css">
		
		<!-- Learedu Stylesheet -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
		
		<!-- Learedu Color -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/color/color1.css">
		<?php wp_head(); ?>
    </head>
    <body>
	
		<!-- Book Preloader -->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--/ End Book Preloader -->

		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Contact -->
							<ul class="content">
								<li><i class="fa fa-phone"></i><?php otherSections('phone_number'); ?></li>
								<li><a href="<?php otherSections('email_address'); ?>"><i class="fa fa-envelope-o"></i><?php otherSections('email_address'); ?></a></li>
								<li><i class="fa fa-clock-o"></i><?php otherSections('open_hour'); ?></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-4 col-12">
							<!-- Social -->
							<!-- <ul class="social">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus "></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul> -->
							<!-- End Social -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<div class="logo">
								<a href="<?= home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="#"></a>
							</div>
							<div class="mobile-menu"></div>
						</div>
						<div class="col-lg-9 col-md-9 col-12">
							<!-- Header Widget -->
							<div class="header-widget">
								<img src="http://placehold.jp/700x120.png">
							</div>
							<!--/ End Header Widget -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
			<!-- Header Menu -->
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="navbar navbar-default">
								<div class="navbar-collapse">
									<!-- Main Menu -->
									<!-- <ul id="nav" class="nav menu navbar-nav">
										<li class="active"><a href="index-2.html">Home<i class="fa fa-angle-down"></i></a>
											<ul class="dropdown">
												<li><a href="index-2.html">Homepage Default</a></li>
												<li><a href="index2.html">Homepage Animation</a></li>
											</ul>
										</li>
										<li><a href="#">Pages<i class="fa fa-angle-down"></i></a>
											<ul class="dropdown">
											<li><a href="about.html">About Us</a></li>
												<li><a href="#">Teachers<i class="fa fa-angle-right"></i></a>
													<ul class="dropdown submenu">
														<li><a href="teacher.html">Teachers V1</a></li>
														<li><a href="teacher2.html">Teachers V2</a></li>
														<li><a href="teacher-single.html">Teacher Single</a></li>
													</ul>
												</li>
												<li><a href="testimonials.html">Testimonials</a></li>
												<li><a href="faqs.html">Faqs</a></li>
												<li><a href="404.html">404 Page</a></li>
											</ul>
										</li>
										<li><a href="#">Courses<i class="fa fa-angle-down"></i></a> 
											<ul class="dropdown">
												<li><a href="courses.html">Courses</a></li>
												<li><a href="course-single.html">Course Single</a></li>
												<li><a href="course-single-video.html">Course Single Video</a></li>
											</ul>
										</li>
										<li><a href="#">Events<i class="fa fa-angle-down"></i></a> 
											<ul class="dropdown">
												<li><a href="events.html">Events</a></li>
												<li><a href="event-single.html">Event Single</a></li>
											</ul>
										</li>
										<li><a href="#">Blogs<i class="fa fa-angle-down"></i></a>
											<ul class="dropdown">
												<li><a href="blogs.html">Blogs Grid Layout</a></li>
												<li><a href="blogs-left-sidebar.html">Blogs Left Sidebar</a></li>
												<li><a href="blogs-right-sidebar.html">Blogs Right Sidebar</a></li>
												<li><a href="blog-single-left-sidebar.html">Blogs Single - Left Sidebar</a></li>
												<li><a href="blog-single.html">Blogs Single - Right Sidebar</a></li>
											</ul>
										</li>
										<li><a href="contact.html">Contact</a></li>
									</ul> -->
									<!-- End Main Menu -->

									<?php wp_nav_menu(
										array(
											'theme_location'  => 'primary',
											'container_class' => '',
											'container_id'    => 'main-menu',
											'menu_class'      => 'nav menu navbar-nav',
											'menu_id'         => 'mobile-demo',
										)
									); ?>
									
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Menu -->
		</header>
		<!-- End Header -->

		