<?php 
	$args = array(
		'post_type' => 'partnership',
		'post_status' => 'publish',
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
		<div class="col-md-12 col-12">
			<div class="owl-carousel owl-theme">
				<?php
					while($query->have_posts()) : $query->the_post();
						$image = get_field('icon');
				 ?>
				 <!-- dsfdf -->
				    <div class="item">
				    	<a target="_blank" href="<?php the_field('link'); ?>">
				     		<img src="<?= $image['url']; ?>" class="image-partner" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
				     	</a>
				    </div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		  
		</div>
	</div>
</section> <br />
<?php endif; ?>