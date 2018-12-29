<?php 
// Template name: Education Solution

	get_header(); 	
?>
	<?php include(TEMPLATEPATH . '/page-template/breadcrumb.php'); ?>

	<?php 
		$args = array(
			'post_type' => 'education_solution',
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'paged' => get_query_var('paged') ? get_query_var('paged') : 1 
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) : 

	?>
	
	<!-- Education Solution -->
		<section class="events archives section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2><?php otherSections('edu_solution_title'); ?></h2>
							<p><?php otherSections('edu_solution_des'); ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
						while($query->have_posts()) : $query->the_post(); 
							$image = get_field('images');
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
									<span><i class="fa fa-calendar"></i>05 June 2018</span>
									<span><i class="fa fa-clock-o"></i>12.00-5.00PM</span>
								</div>
								<h4><a href="<?php the_permalink(); ?>">Opening Day Reception ceremony</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
								<div class="button">
									<a href="<?php the_permalink(); ?>" class="btn">Details</a>
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
									    'total' => $query->max_num_pages
									) );
								?>
							</span>
						</li>
					</ul>
				</div>
			</div>
			</div>
		</section>
		<!--/ End Education Solution -->

		<?php endif; ?>

<?php get_footer(); ?>

