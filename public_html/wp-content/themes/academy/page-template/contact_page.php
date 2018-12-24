<?php 
	// Template name: Contact Page
	get_header();
?>

<?php include(TEMPLATEPATH . '/page-template/breadcrumb.php'); ?>

<!-- Contact Us -->
		<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2><span>Contact</span> Information</h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendrerit, sollicitudin nec ante.  </p>
						</div>
					</div>
				</div>
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="contact-map">
								<!-- Map -->
								<div id="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.2990537315219!2d104.91238952123608!3d11.567275021493343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109516b37549587%3A0xbbaa2aab34b0df01!2z4Z6Y4Z6T4Z-S4Z6R4Z644Z6a4oCL4Z6W4Z-B4Z6R4Z-S4Z6ZIOGelOGehOGfkuGeouGfguGegCDhnprhnrbhnofhnpLhnrbhnpPhnrjigIvhnpfhn5LhnpPhn4bhnpbhn4Hhnok!5e0!3m2!1sen!2skh!4v1545379583714" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<!--/ End Map -->
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-head">
								<!-- Form -->
								<form class="form" action="http://themelamp.com/html/learnedu/mail/mail.php">
									<div class="form-group">
										<input name="name" type="text" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<input name="email" type="email" placeholder="Email Address">
									</div>
									<div class="form-group">
										<input name="subject" type="text" placeholder="Website">
									</div>
									<div class="form-group">
										<textarea name="message" placeholder="Comment"></textarea>
									</div>
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn primary">Post Comment</button>
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-bottom">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-map"></i></div>
								<h3>Location</h3>
								<p>60 Grant Ave. Central New Road 0708, UK 9766 Tanner</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-envelope"></i></div>
								<h3>Email Address</h3>
								<a href="mailto:information@gmail.com">information@yourwebsite.com</a>
								<a href="mailto:admission@myuniversity.com">admission@yourwebsite.com</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-phone"></i></div>
								<h3>Get in Touch</h3>
								<p>+ (234) 853 232 455669</p>
								<p>+ (533) 232 423 455600</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->

<?php get_footer(); ?>