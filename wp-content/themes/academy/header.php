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
		<title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/logo.png">
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
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:400i" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/color/color1.css">
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
		<!-- <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet"> -->
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
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 ml-auto">
							<div class="col-lg-2 col-md-2 col-12">
								<div class="logo">
									<a href="<?= home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="#"></a>
								</div>
								<div class="mobile-menu"></div>
							</div>
							<div class="col-lg-10 col-md-10 mobile-hidden">
								<div class="slogen">
									<p class="text-slogan">International Business Institute</p>
									<div class="horizental_line"><span>for</span></div>
									<span class="sub-slogen">
										<span>Leadership</span>
										International Program
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-12 hide_desktop">
							<form method="GET" action="<?php echo home_url( '/' ); ?>" accept-charset="UTF-8" class="form-horizontal form-search pull-right" method="get">
				        		<input class="searchName" placeholder="Search" size="50" id="search" autocomplete="off" name="s" type="text">
								<button type="submit" class="btn btn-default btn-sm btn-search">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
			<!-- Header Menu -->
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-9">
							<nav class="navbar navbar-default">
								<div class="navbar-collapse">

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
						<div class="col-lg-3 col-md-3 col-12">
							<form method="GET" action="<?php echo home_url( '/' ); ?>" accept-charset="UTF-8" class="form-horizontal form-search pull-right" method="get">
				        		<input class="searchName" size="30" placeholder="Search" id="search" autocomplete="off" name="s" type="text">
								<button type="submit" class="btn btn-default btn-sm btn-search">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>

					</div>
				</div>
			</div>
			<!--/ End Header Menu -->
		</header>
		<!-- End Header -->

		