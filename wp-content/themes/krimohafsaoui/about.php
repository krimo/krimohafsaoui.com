<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<aside class="sidebar">
	<img src="<?php bloginfo('template_directory'); ?>/img/me.jpg" />
</aside>

<article class="main-content">
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</article><!-- .main-content --> 
<?php get_footer(); ?>