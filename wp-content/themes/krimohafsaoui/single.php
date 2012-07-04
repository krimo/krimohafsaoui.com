<?php get_header(); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<aside class="sidebar single-post-info">
				<time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('F jS, Y') ?> <em>by</em> <a href="https://plus.google.com/112687541384446345786" rel="publisher">Krimo</a></time>
				<a href="#commentssection" class="comments-link"><?php comments_number("No comments yet.", "1 comment &raquo;", "% comments &raquo;"); ?></a>
			</aside>
			
			<article class="main-content">
				
				    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<p class="incipit"><?=get_post_meta(get_the_ID(), 'incipit', true);?></p>
				        <?php the_content(); ?>
				    </div>
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
<?php comments_template(); ?>
<?php get_footer(); ?>