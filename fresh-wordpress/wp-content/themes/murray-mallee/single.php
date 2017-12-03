<?php get_header(); ?>	
<!-- Hero image and copy -->

<div class="header" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
	<h1 class="hero-text" ><?php the_title() ?></h1>
</div>

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