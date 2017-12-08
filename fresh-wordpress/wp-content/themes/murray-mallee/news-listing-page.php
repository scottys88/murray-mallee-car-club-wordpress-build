<?php
/**
 * Template Name: News listing
 */
?>
<?php get_header(); ?>

	<?php if( get_field('news_image') ): ?>
	<div class="header sub-page" style="background-image: url(<?php the_field('news_image'); ?>);">
			<?php endif; ?>
		<h1 class="hero-text" ><?php the_field('news_heading'); ?></h1>
	</div>


	<?php query_posts('cat=-4'); ?>
	<?php $i = 1; while(have_posts() && $i < 5) : the_post(); ?>
	<div class="container news-articles">
	<div class="row news" style="border-bottom: 0.5px solid #a5a5a5;">
		<div class="news-item">
			<div class="news-title">
				<h4 class="news-heading"><?php the_title() ?></h4>
			</div>
			<div class="news-date">
				<p class="article-date"><?php the_time('d/m/y')?></p>
			</div>
			<div class="news-description">
				<p class="article-synopsis"><?php the_excerpt('Read more'); ?>
				</p>
			</div>
			<div class="news-read-more">
				<a href="<?php the_permalink(); ?>"><div class="button button-primary">Read rest of article
				</div></a>
			</div>
		</div>
	</div>
	
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>
