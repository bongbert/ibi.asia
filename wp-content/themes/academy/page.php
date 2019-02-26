<?php get_header(); ?>
<?php 
	if (have_posts()):

?>
	<?php include(TEMPLATEPATH . '/page-template/breadcrumb.php'); ?>

	<!-- Blog Single -->
	<section class="blog b-archives single section">
		<div class="container">
			<div class="row">
				<?php 
					while(have_posts()) : the_post();
				?>
				<div class="col-lg-8 col-12">
					<div class="blog-detail">
						<div class="detail-content">
							<div class="blog-info">
								<a href="#"><i class="fa fa-user"></i>By: <?php the_author(); ?></a>
								<a href="#"><i class="fa fa-calendar"></i><?php the_date(); ?></a>
								
							</div>
							<h2 class="blog-title"><a href="#"><?php the_title(); ?></a></h2>

							<div class="feature-head">
								<?php 
									if ( has_post_thumbnail() ) :
										    the_post_thumbnail();
									
									endif; 
								?>

							</div><br />
							
							<?php the_content(); ?>
							<br />

								<div class="panel-group" id="accordion">
							<?php 
								$i = 0;
								if( have_rows('text_repeater') ):

							    while ( have_rows('text_repeater') ) : the_row();
							    	$i++;
							?>

									<div class="panel-title">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?= $i; ?>">
												<i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php the_sub_field('text_title'); ?></a>
										</div>
										<div id="collapse-<?= $i; ?>" class="panel-collapse collapse in">
											<div class="panel-body"><?php the_sub_field('text_description'); ?></div>
										</div>
									</div>
							    
							<?php endwhile; endif; ?>
								</div>

						</div>
					</div>
				</div>
				<?php endwhile; ?>

					
				<?php get_sidebar(); ?>

			</div>
		</div>
	</section>
	<!--/ End Blog Single -->

	<?php endif; ?>
<?php get_footer(); ?>