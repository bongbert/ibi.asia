<?php 
	// Template name: Contact Page

	if (isset($_POST['submit'])) {
	
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: Your name <info@address.com>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
		$to = 'len.zeecode@gmail.com';
		$subject = 'Apple Computer';
		$message = 'Steve, I think this computer thing might really take off.';

		mail( $to, $subject, $message, $headers );
	}
	
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
							<?php if(!empty(otherSections('footer_description'))) : ?>
								<p><?php otherSections('footer_description'); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-head">
								<!-- Form -->
								<form class="form" method="post">
									<div class="form-group">
										<input name="name" type="text" placeholder="Enter Name *" autocomplete="off">
									</div>
									<div class="form-group">
										<input name="email" type="email" placeholder="Email Address *" autocomplete="off">
									</div>
									<div class="form-group">
										<input name="subject" type="text" placeholder="Website" autocomplete="off">
									</div>
									<div class="form-group">
										<textarea name="message" placeholder="Comment *"></textarea>
									</div>
									<div class="form-group">
										<div class="button">
											<button type="submit" name="submit" class="btn primary">Post Comment</button>
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
								<p><?php otherSections('footer_address'); ?></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-envelope"></i></div>
								<h3>Email Address</h3>
								<?php otherSections('footer_email'); ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-phone"></i></div>
								<h3>Get in Touch</h3>
								<p><?php otherSections('footer_phone'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->

<?php get_footer(); ?>