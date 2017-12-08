<?php
/**
 * Template Name: Events
 */
?>

<?php get_header(); ?>	
<!-- Hero image and copy -->

<?php while(have_posts()) : the_post(); ?>
<div class="container content-articles">
		<div class="row content-area">
			<p>
				<?php the_content('Read More'); ?>
			</p>	
		</div>	
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>