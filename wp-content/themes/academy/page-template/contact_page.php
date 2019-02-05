<?php
	// Template name: Contact page

	get_header();

	$args = array(
		'post_type' => 'page',
		'pagename' => 'contact-us',
		'posts_per_page' => 1,
		'post_status' => 'publish'
	);
	$query = new WP_Query($args);
?>


<?php include(TEMPLATEPATH . '/page-template/breadcrumb.php'); ?>

<!-- Contact Us -->
	<section id="contact" class="contact section">
		<div class="container">
			<?php 
				if($query->have_posts()) : 
					while($query->have_posts()) : $query->the_post(); 
			?>
			
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2><span>Contact</span> Information</h2>
						<?php //the_field('contact_description'); ?>
						</div>
					</div>
				</div>
				<div class="contact-head">
					<div class="row">	
						<div class="col-lg-12 col-md-12 col-12">
							<div class="contact_infor">
								<ul>
									<li><label><i class="fa fa-map-marker"></i>Address</label>
										<div class="des"><?php the_field('address'); ?></div>
									</li>
									<li>
										<label><i class="fa fa-phone"></i>Phone Number</label>
										<div class="des">
											<?php 
												$i = 0;
												if(have_rows('phone_number')) :
													while (have_rows('phone_number')) : the_row();
														$i++;
												?>
												<?php 
													if($i == 1) echo '';
													else echo '|';
												?>
												<a href="tel:<?php the_sub_field('phone_number'); ?>">
													<?php the_sub_field('phone_number'); ?>
												</a> 
												<?php
													endwhile;
												endif;
											?>
										</div>
									</li>
									<li><label><i class="fa fa-envelope"></i>Email Address</label>
										<div class="des">
											<?php 
												$i = 0;
												if(have_rows('emails')) :
													while (have_rows('emails')) : the_row();
														$i++;
												?>
												<?php 
													if($i == 1) echo '';
													else echo '|';
												?>
												<a href="mailto:<?php the_sub_field('email'); ?>">
													<?php the_sub_field('email'); ?>
												</a>
												<?php
													endwhile;
												endif;
											?>
										</div>
									</li>
									<li>
										<label><i class="fa fa-clock-o"></i>WORKING HOURS</label>
										<div class="des">
											<?php the_field('working_hour'); ?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; endif; ?>
		</div>
	</section>
	<!--/ End Contact Us -->

<?php get_footer(); ?>
