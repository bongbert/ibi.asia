<?php
	$arg = array(
		'post_type' => 'events',
		'post_status' => 'publish',
		'posts_per_page' => 2,
		'orderby' => 'date',
    	'order' => 'DESC'
	); 

	$query = new WP_Query($arg);

	if($query->have_posts()) :
?>

<div class="col-lg-4 col-md-6 col-12">
	<!-- Latest News -->
	<div class="single-widget latest-news">
		<h2>Latest Posts</h2>
		<div class="news-inner">
			<?php
				while ($query->have_posts()) : $query->the_post();
					$image = get_field('images'); 
			?>
			<div class="single-news">
				<img src="<?= $image['url']; ?>" alt="#">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p><?= wp_trim_words( get_the_content(), 6, '...' ); ?></p>
			</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
	<!--/ End Latest News -->
</div>

<?php endif; ?>