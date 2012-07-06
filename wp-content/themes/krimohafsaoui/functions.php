<?php
add_filter('comment_form_default_fields', 'kh_comment_form_defaults');

function kh_comment_form_defaults($arg) {
    $arg['author'] = '<label for="author">Name:</label> <input type="text" id="author" name="author" value="' . esc_attr( $commenter['comment_author'] ) . '" required/>';
    $arg['email'] = '<label for="email">Email:</label> <input type="email" id="email" name="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required/>';
    $arg['url'] = '<label for="url">Website:</label> <input type="url" id="url" name="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" required/>';
    return $arg;
}

function new_excerpt_more($more) {
       global $post;
	return '&hellip;<a href="'. get_permalink($post->ID) . '">Read more &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Global Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

function my_wp_nav_menu_args( $args = '' )
{
	$args['container'] = false;
	return $args;
} // function

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
?>
<?php
    function format_comment($comment, $args, $depth) {
    
       $GLOBALS['comment'] = $comment; ?>
       
        <article <?php comment_class('clearfix'); ?> id="article-comment-<?php comment_ID() ?>">
			<div class="gravatar">
				<?php echo get_avatar( $comment); ?>
			</div>
			<div class="comment-body">							
				<header>
					<h3><cite><?php printf(__('%s'), get_comment_author_link()) ?></cite></h3>
					<time datetime="<?php the_time('Y-m-d') ?>" pubdate><em>on</em> <?php comment_date('F jS, Y'); ?> <em>at</em> <?php comment_time('h:ia'); ?></time>
				</header>
				<section class="comment-content">
					<?php comment_text(); ?>
					<?php if ($comment->comment_approved == '0') : ?>
							<em><?php _e('Your comment is awaiting moderation.') ?></em>
					<?php endif; ?>
					<?php echo comment_reply_link(); ?> 
				</section>
			</div>
        </article>
<?php } ?>