<?php get_header(); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<aside class="sidebar single-post-info">
				<?php edit_post_link(); ?>
				<ul>
					<li>Project type: <?=get_post_meta($post->ID, 'kh_project_type', true); ?></li>
					<li>Client: <?=get_post_meta($post->ID, 'kh_project_client', true); ?></li>
					<li>Date: <?=get_post_meta($post->ID, 'kh_project_date', true); ?></li>
				</ul>
			</aside>
			
			<article <?php post_class('main-content single-portfolio-main-content') ?> id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			<footer class="clearfix single-post-footer">
				<div class="previous post-link">
					<span>&laquo; Previously</span>
					<?php previous_post_link('%link'); ?>
				</div>
				<div class="next post-link">
					<span>Next on &raquo;</span>
					<?php next_post_link('%link'); ?>
				</div>		
			</footer>
<?php get_footer(); ?>