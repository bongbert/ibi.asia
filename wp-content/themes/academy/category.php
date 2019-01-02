<?php
	get_header();

	$page_object = get_queried_object();
    $cat_name = $page_object->cat_name;
	$idObj = get_category_by_slug($cat_name); 
	$cat_id = $idObj->term_id;

	$arg = array(
		'post_type' => 'events',
		'posts_per_page' => 10,
		'post_status' => 'publish',
		'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
		'tax_query' => array(
	        array(
	            'taxonomy' => 'category',
	            'field'    => 'id',
	            'terms'    => $cat_id,
	        ),
	    ),
	);
	$query = new WP_Query($arg);

?>

<?php include(TEMPLATEPATH . '/page-template/breadcrumb.php'); ?>
<!-- Blogs -->
	<section class="blog b-archives section">
		<div class="container">
			<?php if ($query->have_posts()) : ?>
			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="row">
						<?php 
							while ($query->have_posts()) : $query->the_post();
								$image = get_field('images'); 
						?>

						<div class="col-lg-6 col-12">
							<!-- Single Blog -->
							<div class="single-blog">
								<div class="blog-head overlay">
									<div class="date">
										<h4>02<span>Jan</span></h4>
									</div>
									<img src="<?= $image['url']; ?>" alt="#">
								</div>
								<div class="blog-content">
									<h4 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<div class="blog-info">
										<a href="#"><i class="fa fa-user"></i>By: <?php the_author(); ?></a>
									<a href="#"><i class="fa fa-list"></i><?php the_date(); ?></a>
									</div>
									<p><?= wp_trim_words( get_the_content(), 10, '...' ); ?></p>
									<div class="button">
										<a href="<?php the_permalink(); ?>" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div>
							<!-- End Single Blog -->
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
				<?php get_sidebar(); ?>
			</div>
		<?php else : 
			echo "<h4>No Content</h4>";
			endif; ?>
		</div>
	</section>
	<!--/ End Blogs -->


<?php get_footer(); ?>