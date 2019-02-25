<?php 
	$args = array(
		'post_type' => 'professor',
		'post_status' => 'publish',
		'posts_per_page' => 4
	);
	$query = new WP_Query($args);

	if ($query->have_posts()) : 
?>
<!-- Team -->
	<section class="team section">
		<div class="container">
			<div class="row">
				<div class="col-12 wow zoomIn">
					<div class="section-title">
						<h2><?php otherSections('professor_title'); ?></h2>
						<p><?php otherSections('professor_description'); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php 
					$i = 0;
					while ($query->have_posts()) : $query->the_post();
						$image = get_field('images');
						$i = $i + 0.4;
				?>
					<div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="<?= $i; ?>s">
						<!-- Single Team -->
						<div class="single-team">								
							<div class="feature-head">
								<?php 
									if ( has_post_thumbnail() ) :
										    the_post_thumbnail();
									else : 
								?>
									<img width="100%" style="height: 300px;" src="<?php bloginfo('template_directory'); ?>/images/no-image.jpg"/>
									
								<?php endif; ?>
								
							</div>

							<!-- <img src="<?= $image['url']; ?>" alt="#"> -->
							<div class="team-hover">
								<h4><a class="block-professor-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span><?php the_field('professor_title'); ?></span></h4>
								<p>
									<?= wp_trim_words( get_the_content(), 10, '...' ); ?>
								</p>
								<?php 
									if (have_rows('social_network')) :
								?>
									<ul class="social">
										<?php while ( have_rows('social_network') ) : the_row(); ?>
										<li>
											<a target="_blank" title="<?php the_sub_field('social_text'); ?>" href="<?php the_sub_field('social_link'); ?>">
													<?php the_sub_field('social_icon'); ?>
												</a>
										</li>
										<?php endwhile; ?>	
									</ul>
								<?php endif; ?>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
		<center><a class="margin-top btn btn-primary" href="<?= home_url('team-professor'); ?>">View More</a></center>
	</section>
	<!--/ End Team -->
<?php endif; ?>