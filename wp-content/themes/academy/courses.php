<?php 
	$cours_arg = array(
		'post_type' => 'our_course',
		'post_status' => 'publish',
		'posts_per_page' => 5
	);
	$query = new WP_Query($cours_arg);

	if ($query->have_posts()) : 
?>
<!-- Courses -->
	<section class="courses section-bg section">
		<div class="container">
			<div class="row">
				<div class="col-12 wow zoomIn">
					<div class="section-title">
						<h2><?php otherSections('course_title'); ?></h2>
						<p><?php otherSections('course_description'); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="course-slider">
						<?php 
							$i = 0;
							while ($query->have_posts()) : $query->the_post();
								$image = get_field('images');
								$i = $i + 0.2;
						?>
						<!-- Single Course -->
						<div class="single-course">
							<div class="course-head overlay">
								<div class="feature-head">
									<?php 
										if ( has_post_thumbnail() ) :
											    the_post_thumbnail();
										else : 
									?>
										<img src="<?php bloginfo('template_directory'); ?>/images/no-image.jpg" />
										
									<?php endif; ?>
								</div>
								<a href="<?php the_permalink();?>" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="<?php the_permalink();?>"><?php the_title(); ?>t</a></h4>
								<?= wp_trim_words( get_the_content(), 10, '...' ); ?>
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
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
		<center><a class="margin-top btn btn-primary" href="<?= home_url('courses'); ?>">View More</a></center>
	</section>
	<!--/ End Courses -->	
<?php endif; ?>
