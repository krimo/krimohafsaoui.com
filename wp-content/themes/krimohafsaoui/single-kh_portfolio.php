<?php get_header(); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<aside class="sidebar single-post-info">
				<?php edit_post_link(); ?>
				<ul>
					<li><strong>Project type:</strong> <?=get_post_meta($post->ID, 'kh_project_type', true); ?></li>
					<li><strong>Client:</strong> <?=get_post_meta($post->ID, 'kh_project_client', true); ?></li>
					<li><strong>Date:</strong> <?=get_post_meta($post->ID, 'kh_project_date', true); ?></li>
					<?php if (get_post_meta($post->ID, 'kh_project_url', true)) { ?>
					<li><strong>Project URL:</strong> <a href="<?=get_post_meta($post->ID, 'kh_project_url', true); ?>">visit &raquo;</a></li>
					<?php } ?>
				</ul>
			</aside>
			
			<article <?php post_class('main-content single-portfolio-main-content') ?> id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			<footer class="clearfix single-post-footer">
				<p>No reproduction allowed; you've been warned.</p>
			</footer>
<?php get_footer(); ?>