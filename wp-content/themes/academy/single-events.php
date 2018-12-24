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
								<a href="#"><i class="fa fa-calendar"></i>Event Date : <?php the_field('date_event'); ?></a>
								<a href="#"><i class="fa fa-clock"></i><?php the_date(); ?></a>
								<!-- <a href="#"><i class="fa fa-bolt"></i>Learning</a> -->
							</div>
							<h2 class="blog-title"><a href="#"><?php the_title(); ?></a></h2>
							<?php the_content(); ?>
						</div>

						<div class="comment-main">
							<div class="comment-title">
								<h2>Leave a Reply</h2>
								<p>Your email address will not be published. Required fields are marked *</p>
							</div>
							<!-- Form -->
							<form class="form" action="#">
								<div class="row">
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<input name="name" type="text" placeholder="Full name">
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<input name="email" type="email" placeholder="Enter your email">
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<input name="subject" type="text" placeholder="Subjects">
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<input name="address" type="url" placeholder="Web Address">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<textarea name="address" rows="6" placeholder="Web Address"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<div class="button">
												<button type="submit" class="btn primary">Post Comment</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
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