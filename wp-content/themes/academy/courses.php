<?php 
	$args = array(
		'post_type' => 'our_course',
		'post_status' => 'publish',
		'posts_per_page' => 5
	);
	$query = new WP_Query($args);

	if ($query->have_posts()) : 
?>
<!-- Courses -->
	<section class="courses section-bg section">
		<div class="container">
			<div class="row">
				<div class="col-12 wow zoomIn">
					<div class="section-title">
						<h2>Popular <span>Courses</span> We Offer</h2>
						<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="course-slider">
						<?php 
							$i = 0;
							while ($query->have_posts()) : $query->the_post();
								$image = get_field('images');
								$i = $i + 0.2;
						?>
						<!-- Single Course -->
						<div class="single-course">
							<div class="course-head overlay">
								<img src="<?= $image['url']; ?>" alt="#">
								<a href="<?php the_permalink();?>" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="<?php the_permalink();?>"><span>Commerce</span><?php the_title(); ?>t</a></h4>
								<?= wp_trim_words( get_the_content(), 10, '...' ); ?>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>36 Seat</span>
									<span><i class="fa fa-clock-o"></i>2 Years</span>
								</div>
								<span class="price">$350</span>
							</div>
						</div>
						<!--/ End Single Course -->
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Courses -->	

<?php endif; ?>