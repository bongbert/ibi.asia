<?php 
	$args = array(
		'post_type' => 'events',
		'post_status' => 'publish',
		'posts_per_page' => 5,
		'orderby' => 'date',
    	'order' => 'DESC',
	);

	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) :
?>

<!-- Posts -->
	<div class="single-widget posts">
		<h3>Recent <span>News & Events</span></h3>
		<?php 
			while($the_query->have_posts()) : $the_query->the_post(); 
				$image = get_field('images');
		?>
		<div class="single-post">
			<div class="post-img">
				<img src="<?= $image['url']; ?>" alt="">
			</div>
			<div class="post-info">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<span><i class="fa fa-calendar"></i><?php the_field('date_event'); ?></span>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
	<!--/ End Posts -->


<?php endif; ?>