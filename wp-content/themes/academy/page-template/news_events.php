<?php 
	// Template name: News and Events
	get_header();
?>

<?php 
	$args = array(
		'post_type' => 'events',
		'post_status' => 'publish',
		'posts_per_page' => 9,
		'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	);

	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) :
?>
	
	<?php include(TEMPLATEPATH . '/page-template/breadcrumb.php'); ?>

	<!-- Events -->
	<section class="events archives section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2><?php the_title(); ?></h2>
						<p><?= wp_trim_words( get_the_content(), 10, '...' ); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php 
					$i = 0;
					while ($the_query->have_posts()) : $the_query->the_post();
						$image = get_field('images');
						$i = $i + 0.4;
				?>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Single Event -->
					<div class="single-event">
						<div class="head overlay">
							<img src="<?= $image['url']; ?>" alt="#">
							<a href="<?php the_permalink(); ?>" class="btn"><i class="fa fa-search"></i></a>
						</div>
						<div class="event-content">
							<div class="meta"> 
								<span><i class="fa fa-calendar"></i><?php the_field('date_event'); ?></span>
								<span><i class="fa fa-clock-o"></i><?php the_field('starting_time'); ?> - <?php the_field('ending_time'); ?></span>
							</div>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p><?= wp_trim_words(get_the_content(), 11, '...') ?></p>
							<div class="button">
								<a href="<?php the_permalink(); ?>" class="btn">Read More</a>
							</div>
						</div>
					</div>
					<!--/ End Single Event -->
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
				
			</div>
			<div class="row">
				<div class="navigation paging-navigation" role="navigation">
					<ul class="page-numbers">
						<li>
							<span>
								<?php 
									$big = 999999999; // need an unlikely integer
									 echo paginate_links( array(
									    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
									    'format' => '?paged=%#%',
									    'current' => max( 1, get_query_var('paged') ),
									    'total' => $the_query->max_num_pages
									) );
								?>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Events -->
	
	<?php endif; ?>

<?php get_footer(); ?>