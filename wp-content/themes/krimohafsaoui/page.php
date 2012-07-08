<?php get_header(); ?>  
<?php if (is_front_page()) {?>
<aside class="sidebar">
	<p>Here are samples of my work over the past few years. Feel free to <a href="/contact/">contact me</a> if you need more information on a particular piece.</p>
</aside>

<article class="main-content">	
	
		<?php $the_query = new WP_Query( array( 'post_type' => 'kh_portfolio', 'posts_per_page' => 10 ) ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<figure id="post-<?php the_ID(); ?>" <?php post_class( 'portfolio-post' ); ?>>
				<img src="http://lorempixel.com/960/540" alt="<?php the_title(); ?>"/>
				<a href="<?php the_permalink(); ?>" class="portfolio-post-more-link">&raquo;</a>
			</figure>
		<?php endwhile;?>
</article><!-- .main-content -->
<?php } else { ?>
<aside class="sidebar">
	<img src="http://lorempixel.com/560/940" alt="This is me" />
</aside>

<article class="main-content">
	<section>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					
	</section>
</article><!-- .main-content -->
<?php } ?>
<?php get_footer(); ?>