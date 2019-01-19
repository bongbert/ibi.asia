<div class="col-lg-4 col-12">
	<div class="learnedu-sidebar">
		<!-- Categories -->
		<div class="single-widget categories">
			 <h3 class="title">Categories</h3>
			 <ul>
				<?php 
					$categories = get_categories();
					foreach($categories as $category) {
					   echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
					}
				?>
			</ul>
		</div>
		<!--/ End Categories -->
		
		<?php include(TEMPLATEPATH . '/page-template/recent_post.php'); ?>
	</div>
</div>