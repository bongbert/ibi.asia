<?php 
	$args = array(
		'post_type' => 'events',
		'post_status' => 'publish',
		'posts_per_page' => 5
	);
	$query = new WP_Query($args);

	if ($query->have_posts()) : 
?>
<!-- Events -->
	<section class="events section">
		<div class="container">
			<div class="row">
				<div class="col-12 wow zoomIn">
					<div class="section-title">
						<h2><?php otherSections('event_title'); ?></h2>
						<p><?php otherSections('event_description'); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="event-slider">
						<?php 
							$i = 0;
							while ($query->have_posts()) : $query->the_post();
								$image = get_field('images');
								$i = $i + 0.4;
						?>
						<!-- Single Event -->
						<div class="single-event">
							<div class="head overlay">
								<div class="feature-head">
									<?php 
										if ( has_post_thumbnail() ) :
											    the_post_thumbnail();
										else : 
									?>
										<img src="<?php bloginfo('template_directory'); ?>/images/no-image.jpg" />
										
									<?php endif; ?>
								</div>

								<a href="<?php the_permalink(); ?>" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
							</div>
							<div class="event-content">
								<div class="meta"> 
									<span><i class="fa fa-calendar"></i><?php the_field('event_date'); ?></span>
									<span><i class="fa fa-clock-o"></i><?php the_field('starting_time'); ?> - <?php the_field('ending_time'); ?></span>
								</div>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p><?= wp_trim_words( get_the_content(), 10, '...' ); ?></p>
								<!-- <div class="button">
									<a href="event-single.html" class="btn">Join Event</a>
								</div> -->
							</div>
						</div>
						<!--/ End Single Event -->
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
		<center><a class="margin-top btn btn-primary" href="<?= home_url('news-events'); ?>">View More</a></center>
	</section>
	<!--/ End Events -->

<?php endif; ?>