<?php 
	// Template name: Courses
	get_header();
?>

<?php 
	$args = array(
		'post_type' => 'our_course',
		'post_status' => 'publish',
		'posts_per_page' => 9,
		'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	);

	$query = new WP_Query($args);

		if ($query->have_posts()) : 

?>
<section class="courses archives section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2><?php otherSections('course_title'); ?></h2>
					<p><?php otherSections('course_description'); ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php 
				while($query->have_posts()) : $query->the_post();
				$image = get_field('images');
			?>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Course -->
				<div class="single-course">
					<div class="course-head overlay">
						<img src="<?= $image['url']; ?>" alt="<?= the_title(); ?>">
						<a href="<?php the_permalink(); ?>" class="btn"><i class="fa fa-link"></i></a>
					</div>
					<div class="single-content">
						<h4><a href="<?php the_permalink(); ?>"></a></h4>
						<p><?= wp_trim_words( get_the_content(), 10, '...' ); ?></p>
					</div>
					<div class="course-meta">
						<div class="meta-left">
							<?php if(!empty(get_field('amount_of_seat'))) : ?>
							<span><i class="fa fa-users"></i><?php the_field('amount_of_seat'); ?></span>
							<?php endif; ?>
							<?php if(!empty(get_field('period_of_study'))) : ?>
								<span><i class="fa fa-clock-o"></i><?php the_field('period_of_study'); ?></span>
							<?php endif; ?>
						</div>
						<?php if(!empty(get_field('price'))) : ?>
							<span class="price"><?php the_field('price'); ?></span>
						<?php endif; ?>
					</div>
				</div>
				<!--/ End Single Course -->
			</div>
			<?php endwhile;	wp_reset_postdata(); ?>
			
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
<?php endif; ?>

<?php get_footer(); ?>