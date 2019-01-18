<?php 
	$args = array(
		'post_type' => 'others',
		'pagename' => 'other-section',
		'post_status' => 'publish'
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) : 
	while($query->have_posts()) : $query->the_post();
		the_title();
		the_content();
?>

<?php if (have_rows('social')): ?>
	
	<ul class="social">
		<?php while(have_rows('social')) : the_row(); ?>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<?php endwhile;?>
	</ul>
<?php endif; ?> <!-- Ending if have_rows() -->
<?php endwhile;	 ?> <!-- Ending while have_posts() -->
<?php endif; ?> <!-- Ending if have_posts() -->