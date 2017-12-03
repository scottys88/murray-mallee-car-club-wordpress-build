<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>


		<?php if( get_field('hero_image') ): ?>
		<div class="header" style="background-image: url(<?php the_field('hero_image'); ?>);">
			<?php endif; ?>
		<h1 class="hero-text" ><?php the_field('banner_heading'); ?></h1>
	  </div>
	<container>
		<div class="row intro-para hidden" id="intro-para">
			<p>
				
				<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
	

			<?php endwhile; ?>

		</div>
	</container>


	<container>
		<div class="row news-row">
			<div class="six columns">
				<?php query_posts('cat=-4'); ?>
				<?php $i = 1; while(have_posts() && $i < 2) : the_post(); ?>
				<?php $thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
				$thumb_url = $thumb_url_array[0];
				?>
				<div class="left-image arrow_box" style="background-image: url(<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', false )[0] ?>);">
					<h3>Latest News</h3>
				</div>
			</div>
			<div class="six columns news">
				
				<div class="feature-events">
					<h4><?php the_title() ?></h4>
					<p class="news-date"><?php the_time('d/m/y')?></p>
					<p class="feature-news-article"><?php the_excerpt('Read more'); ?></p>
					<a href="<?php the_permalink(); ?>" class="read-more">Read the rest of the article</a>
					<br><a href="news-listing.html" class="button button-primary">Read all news</a>
				</div>
				<?php $i++; endwhile; ?>
			</div>

		</div>
			<div class="row news-row">
				<?php $catquery = new WP_Query( 'cat=4' ); ?>
				<?php $i = 1; while($catquery -> have_posts() && $i < 2) : $catquery -> the_post(); ?>
				
			<div class="six columns">
				<div class="left-image arrow_box" style="background-image: url(<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', false )[0] ?>);">
					<h3>Latest Events</h3>
				</div>
			</div>
			<div class="six columns">				
				<div class="feature-events">
					<h4><?php the_title() ?></h4>
					<p class="news-date"><?php the_time('d/m/y')?></p>
					<p class="feature-news-article"><?php the_excerpt('Read more'); ?></p>
					<a href="<?php the_permalink(); ?>" class="read-more">Find out more</a>
					<br><a href="events-listing.html" class="button button-primary">See all of our events</a>
				</div>
				<?php $i++; endwhile; ?>
			</div>

		</div>
		<!--Begin the Membership banner section-->
		
		 
		<div class="membership-banner" style="background-image: url(<?php the_field('membership_banner', 8); ?>);">

			<h2><?php the_field('membership_banner_heading', 8); ?></h2>
		
		</div>
		
		<div class="row membership-para">
			<p>
				<?php the_field('membership_banner_description', 8); ?>
				
			</p>
			<a href="<?php the_field('membership_banner_button_url', 8); ?>" class="button button-primary"><?php the_field('membership_banner_button_text', 8); ?></a>
		</div>

		
		<div class="row events-banner" style="background-image: url(<?php the_field('events_banner_image', 8); ?>);">
			<h2><?php the_field('events_banner_heading', 8); ?></h2>
		</div>
		<div class="row events-para">
			<p>
				<?php the_field('events_banner_description', 8); ?>
			</p>
			<a href="<?php the_field('events_banner_button_url', 8); ?>" class="button button-primary"><?php the_field('events_banner_button_text', 8); ?></a>
		</div>
		<div class="gallery">
			<div class="gallery-images clearfix">
				<ul>
					<li class="gallery-image">
						<img src="<?php the_field('home_page_image_gallery_image_1', 8); ?>" class="gallery-image">
					</li>
					<li class="gallery-image">
						<img src="<?php the_field('home_page_image_gallery_image_2', 8); ?>" class="gallery-image">
					</li>
					<li class="gallery-image">
						<img src="<?php the_field('home_page_image_gallery_image_3', 8); ?>" class="gallery-image">
					</li>

					<li class="gallery-image">
						<img src="<?php the_field('home_page_image_gallery_image_4', 8); ?>" class="gallery-image">
					</li>
					<li class="gallery-image">
						<img src="<?php the_field('home_page_image_gallery_image_5', 8); ?>" class="gallery-image">
					</li>
					<li class="gallery-image">
						<img src="<?php the_field('home_page_image_gallery_image_6', 8); ?>" class="gallery-image">
					</li>
				</ul>
			</div>
		</div>
		
		
<?php get_footer(); ?>
