<?php 
	$args = array(
		'post_type' => 'events',
		'post_status' => 'publish',
		'orderby' => 'date',
    	'order' => 'DESC',
		'posts_per_page' => 5
	);
	$query = new WP_Query($args);

	if ($query->have_posts()) : 
?>

<!-- Blogs -->
	<section class="blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2><?php otherSections('latest_news_title'); ?></h2>
						<p><?php otherSections('latest_news_description'); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="blog-slider">
						<?php 
							while($query->have_posts()) : $query->the_post();
								$image = get_field('images');
						?>
						<!-- Single Blog -->
						<div class="single-blog">
							<div class="blog-head overlay">
								
								<div class="feature-head">
									<?php 
										if ( has_post_thumbnail() ) :
											    the_post_thumbnail();
										endif; 
									?>
								</div><br />

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
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Blogs -->

<?php endif; ?>