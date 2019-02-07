<?php 
	$args = array(
		'post_type' => 'partnership',
		'post_status' => 'publish',
		'posts_per_page' => 3
	);
	$query = new WP_Query($args);

	if ($query->have_posts()) : 
?>
<section class="container">
	
	<div class="row">
		<div class="col-12 wow zoomIn">
			<div class="section-title">
				<h2><?php otherSections('partner_title'); ?></h2>
				<p><?php otherSections('partner_description'); ?></p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="owl-carousel owl-theme">
				<?php
					while($query->have_posts()) : $query->the_post();
						$image = get_field('icon');
				 ?>
				    <div class="item">
				    	<a target="_blank" href="<?php the_field('link'); ?>">
				     		<img src="<?= $image['url']; ?>" class="img-responsive image-partner" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
				     	</a>
				    </div>
				<?php endwhile; ?>
			</div>
		  
		</div>
	</div>
</section>
<?php endif; ?>