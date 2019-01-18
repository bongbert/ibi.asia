		<?php get_header(); ?>
		
		<?php include('slider.php'); ?>
		
		<?php include('educational_solution.php'); ?>

		<?php //include('enroll.php'); ?>
		
		<?php include('courses.php'); ?>

		<?php //include('actions.php'); ?>

		<?php include('teams_professor.php'); ?>
		
		<?php //include('testimonials.php'); ?>

		<?php include('events.php'); ?>

		<?php //include('fun_fact.php'); ?>
		
		<?php include('blogs.php'); ?>
		
		<?php get_footer(); ?>

		<script>
			if(window.orientation==0)
				{
				  document.getElementById('portrait').style.display = '';
				  document.getElementById('landscape').style.display = 'none';
				}
				else if(window.orientation==90)
				{
				  document.getElementById('portrait').style.display = 'none';
				  document.getElementById('landscape').style.display = '';
				}
		</script>