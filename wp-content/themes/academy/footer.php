<!-- Footer -->
	<?php include('partner.php'); ?>

	<footer class="footer overlay wow fadeIn">
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bottom-head">
							<div class="row">
								<div class="col-12">
									<!-- Social -->
									<?php include(TEMPLATEPATH . '/page-template/footer_social_icon.php'); ?>
									<!-- End Social -->
									<!-- Copyright -->
									<div class="copyright text-center">
										<p>© Copyright <?= date('Y'); ?> <a href="#">International Business Institute</a>. All Rights Reserved</p>
									</div>
									<!--/ End Copyright -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Footer Bottom -->
	</footer>
	<!--/ End Footer -->
		
	<!-- Start Facebook Live Chat -->
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId            : '280130452682849',
	      autoLogAppEvents : true,
	      xfbml            : true,
	      version          : 'v2.11'
	    });
	  };
	(function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "https://connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>

	<div class="fb-customerchat" page_id="278693078906338" minimized="true"></div>

	<!-- End Facebook Live Chat -->

	<!-- Jquery JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-migrate.min.js"></script>
	<!-- Popper JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/popper.min.js"></script>
	<!-- Bootstrap JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<!-- Colors JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/colors.js"></script>
	<!-- Jquery Steller JS -->
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.stellar.min.js"></script>
	<!-- Particle JS -->
	<script src="<?php //bloginfo('template_directory'); ?>/js/particles.min.js"></script>
	<!-- Fancy Box JS-->
	<script src="<?php //bloginfo('template_directory'); ?>/js/facnybox.min.js"></script>
	<!-- Magnific Popup JS-->
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.magnific-popup.min.js"></script>
	<!-- Masonry JS-->
	<script src="<?php bloginfo('template_directory'); ?>/js/masonry.pkgd.min.js"></script>
	<!-- Circle Progress JS -->
	<script src="<?php bloginfo('template_directory'); ?>/js/circle-progress.min.js"></script>
	<!-- Owl Carousel JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
	<!-- Waypoints JS-->
    <script src="<?php //bloginfo('template_directory'); ?>/js/waypoints.min.js"></script>
	<!-- Slick Nav JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/slicknav.min.js"></script>
	<!-- Counter Up JS -->
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.counterup.min.js"></script>
	<!-- Easing JS-->
    <script src="<?php //bloginfo('template_directory'); ?>/js/easing.min.js"></script>
	<!-- Wow Min JS-->
	<script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
	<!-- Scroll Up JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollUp.min.js"></script>
	<!-- Google Maps JS -->
    <script src="<?php //bloginfo('template_directory'); ?>/js/gmaps.min.js"></script>
	<!-- Main JS-->
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
<script>
    $(document).ready(function() {
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots:false,
        responsive: {
          0: {
            items: 1,
            nav: false,
            dots:true,
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 5,
            nav: false,
            loop: false,
            margin: 20
          }
        }
      })
    })
  </script>

</html>
<?php wp_footer(); ?>