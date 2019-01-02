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
								<!-- <a href="#"><i class="fa fa-bolt"></i>Learning</a> -->
							</div>
							<h2 class="blog-title"><a href="#"><?php the_title(); ?></a></h2>
							<?php the_content(); ?>
						</div>
						<!-- <div class="blog-bottom">
							<ul class="share">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div> -->
						
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