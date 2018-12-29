<?php 
	$args = array(
		'post_type' => 'education_solution',
		'post_status' => 'publish'
	);
	$query = new WP_Query($args);

	if ($query->have_posts()) : 
?>

<!-- Features -->
	<section class="our-features section">
		<div class="container">
			<div class="row">
				<div class="col-12 wow zoomIn">
					<div class="section-title">
						<h2><?php otherSections('edu_solution_title'); ?></h2>
						<p><?php otherSections('edu_solution_des'); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php 
				$i = 0;
					while ($query->have_posts()) : $query->the_post();
						$image = get_field('images');
						$i = $i + 0.2;
				?>
				<div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="<?= $i; ?>s">
					<!-- Single Feature -->
					<div class="single-feature">
						<div class="feature-head">
							<img src="<?= $image['url']; ?>" alt="#">
						</div>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?= wp_trim_words( get_the_content(), 10, '...' ); ?>
					</div>
					<!--/ End Single Feature -->
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	<center><a class="margin-top btn btn-primary" href="<?= home_url('education-solution'); ?>">View More</a></center>
	</section>
	<!-- End Features -->
<?php endif; ?>