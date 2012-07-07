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
	<?php the_content(); ?>
</article><!-- .main-content --> 
<?php get_footer(); ?>