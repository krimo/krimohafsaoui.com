<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<aside class="sidebar">
	<p>Find recent posts here. Be WARNED that these are mostly for web designers and/or developers to enjoy; they get technical quite often.</p>
	<p>Visit <a href="">the archives</a> for more.</p>
</aside>

<article class="main-content">	
	
		<?php $the_query = new WP_Query( 'showposts=10' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<section id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
				<header>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a> / <?php comments_number("No comments yet.", "1 comment", "% comments"); ?></h2>
					<time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('F jS, Y') ?></time>
				</header>
				<?php the_excerpt(); ?>
			</section>
		<?php endwhile;?>
</article><!-- .main-content -->
<?php get_footer(); ?>