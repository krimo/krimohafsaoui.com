<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<aside class="sidebar">
	<p>Please take the time to <strong>actually read the following</strong> before attempting to contact me. You <strong>will not</strong> get an answer if you don't.</p>
</aside>

<article class="main-content">
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</article><!-- .main-content -->
<?php get_footer(); ?>