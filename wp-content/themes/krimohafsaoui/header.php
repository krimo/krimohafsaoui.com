<!-- KH LOVES HIM SOME POLAR BEARS
                      _.--""""--.._
                  _.""    .'       `-._
                .";      ;           ; `-.
               / /     .'           ;     `.
              / ;     ;             ;       \
             ; :      :             :     `-.\
             ; ;      :              `.      `;
             : :      :                \      :
             : \      `:                \   `.;
              \ \      `;                ;    ;
               \ : .'   ;                |   ;
                `>'     :              `.;   )
                / _.'               `.  ;/ _(
               ;,'     ;    `.        `.;    `-.
              ;' .'   :    `. `.       / \, \ \ \
              :,'     :      `. `. \  ; ::\_/_/_/::
            .-=:.-"  -,-   "-.,=-.\ ;.; :::; ; ;::
            |(`.`     :       .')| \: `.  :::::::
             \\/      :       \//   ;   \              _____
              :      .:.       :  _/     ;             \hjw:
    /         ;                ;  ;      |              \"""
  .'          :    _     _    ;  /       ;              /|
 /             `.  \;   ;/  .' .'       /              /:|
|                !  :   :  !_.'        /           .--::/
|\___             `.:   :.'/\         ;      ____.':|:|/
\:::|\              \ _ /  | :       :   ___/|:::|:'"""
 `""|:\             ;"^"   | !       :__/|::|/""""
    \::\_____     .-'      | ;       |::|/""
     \:|::::|\   / / /    / /       /"""
      \|::::|:`--\_\_\__.'-|       ;
        """" \::::::::::::/      .'
              """"'"""".-'      (
       __,------.__.--/ , ,  , |/--._
      /              :\|  |  |v'     \_
     |\              :::v-;v-'::       \
     \:\              :::::::::         \
      \|`-.                             /|
        `: \          ____         ____/:/
          \|:-.______/|::|\       /|:::|/
           |::|:::::|:/"""\\_____/:/""""
           `-:|:::::|/     \|::::|/
              `"""""'       `""""'
-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php if (is_front_page()) {echo "Work";} else { wp_title("", true); }?> | <?php bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width">
	

	<?php if( is_single()) { ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/prettify.css">
	<?php } ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	
	<?php if (is_single()) {
		$color = get_post_meta($post->ID, 'kh_custom_color', true);
		$customBg = get_post_meta($post->ID, 'kh_custom_bg', true);
		if(!empty($color)) { ?>
		    <style type="text/css">
						p > a, .comments-link, .post-link a, .comment a, h2 > a, p > a:hover, .comments-link:hover, .post-link a:hover, .comment a:hover, h2 > a:hover, .single-post-info a, .single-post-info a:hover {
							border-bottom-color:<?php echo $color?>;
							color:<?php echo $color?>;
						}
						.global-header-container, .global-footer-container, .comments-header {background-color:<?php echo $color?>;}
						.animated-header-bg {background:url('<?php bloginfo("template_directory"); ?>/img/<?=$customBg;?>.png') no-repeat right bottom;}
			</style>
		<?php }
	} ?>
	<!--
	<script src="<?php bloginfo('template_url'); ?>/js/lzld.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
	
	<script src="http://use.typekit.com/knw7quo.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	-->
</head>
<body class="<?php if (is_front_page()) {echo "Work";} else { wp_title("", true); } if (is_single()) {echo " kh-pretty kh-single";} ?>">
<!--[if lt IE 7]><p class=chromeframe>Your browser <em>sucks</em>. <a href="http://browsehappy.com/">Upgrade to a real browser</a> or keep it but for the love of god <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a>. It's free, installs in seconds even in a corporate environment, and you'll get the full experience on many sites.</p><![endif]-->

	<a href="" class="go-to-top">&uarr;</a>

	<div class="global-header-container">
		<header class="wrapper clearfix">
			
			<div class="animated-header-bg"></div>
			
			<div class="masthead clearfix">	
				<div class="logo">Krimo Hafsaoui<br /><em>Web designer &amp; developer.</em></div>
				<nav class="global-nav">
					<?php wp_nav_menu( array('theme_location' => 'global-menu' )); ?>
				</nav>
			</div>
						
			<h1 class="page-title <?php if (is_single()) {echo "single";} ?>"><?php if (is_front_page()) {echo "Work";} else { wp_title("", true); }?></h1>
		</header>
	</div>
	<div id="main-container">
		<div id="main" class="wrapper clearfix">