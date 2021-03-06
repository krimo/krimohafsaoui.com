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

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if(is_single() && $item->title == "Blog"){ //Notice you can change the conditional from is_single() and $item->title
             $classes[] = "active";
     }
     return $classes;
}

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'kh_portfolio',
		array(
			'labels' => array(
				'name' => __( 'portfolio' ),
				'singular_name' => __( 'portfolio' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'work',
				'with_front' => false
			),
			'supports' => array('custom-fields', 'title', 'editor', 'author')
		)
	);
}

add_filter('get_image_tag', 'kh_image_attachment', 10, 5);
function kh_image_attachment($html, $id, $alt, $title, $align) {
	$image_source = wp_get_attachment_image_src( $id, 'full' );
	$html = '<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="'.$image_source[0].'" id="kh-image-attachment-'.esc_attr($id).'" alt="' . esc_attr($alt) . '" title="'.esc_attr($title).'" onload=lzld(this) onerror=lzld(this) />';
	return $html;
}

// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}

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