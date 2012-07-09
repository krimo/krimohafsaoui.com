<?php get_header(); ?>
<aside class="sidebar">
	<p>Here are samples of my work over the past few years. Feel free to <a href="/contact/">contact me</a> if you need more information on a particular piece.</p>
</aside>

<article class="main-content">	
	
		<?php $the_query = new WP_Query( array( 'post_type' => 'kh_portfolio', 'posts_per_page' => 10 ) ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<section id="post-<?php the_ID(); ?>" <?php post_class( 'portfolio-post' ); ?>>
				<header>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('F jS, Y') ?></time>
				</header>
			</section>
		<?php endwhile;?>
</article><!-- .main-content -->
<?php get_footer(); ?>