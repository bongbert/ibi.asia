<?php 
    // Template name: Sliders
    $args = array(
        'post_type' => 'slider',
        'post_status' => 'publish'
    );

    $the_query = new WP_Query($args);


    if ($the_query->have_posts()) :

?>



<!-- Slider Area -->
	<section class="home-slider">
		<div class="slider-active">
			<?php 
	            $i = 0;
	            while ($the_query->have_posts()) : $the_query->the_post();
	                $image = get_field('images');
	                $active_slide = '';

	                if($i == 0){
	                    $active_slide = 'active';
	                }

	        ?>
			<!-- Single Slider -->
			<div class="single-slider overlay" style="background-image:url('<?php echo $image['url']; ?>')">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-12">
							<div class="slider-text text-center">
								<h1><?php the_title(); ?></h1>
								<p><?php the_field('description'); ?></p>
								<!-- <div class="button">
									<a href="courses.html" class="btn primary">Our Courses</a>
									<a href="about.html" class="btn">About Learnedu</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Single Slider -->
			<?php endwhile; wp_reset_postdata() ?>

		</div>
	</section>
	<!--/ End Slider Area -->

<?php endif; ?>