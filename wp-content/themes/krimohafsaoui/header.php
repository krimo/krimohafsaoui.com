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
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	
	<?php if (is_single()) {
		$color = get_post_meta($post->ID, 'kh_custom_color', true);
		if(!empty($color)) { ?>
		    <style type="text/css">
						p > a, .comments-link, .post-link a, .comment a, h2 > a, p > a:hover, .comments-link:hover, .post-link a:hover, .comment a:hover, h2 > a:hover, .single-post-info a, .single-post-info a:hover {border-bottom-color:<?php echo $color?>;color:<?php echo $color?>;}
						.global-header-container, .global-footer-container, .comments-header {background-color:<?php echo $color?>;}
			</style>
		<?php }
	} ?>

	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
	
	<script src="http://use.typekit.com/knw7quo.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
</head>
<body class="<?php if (is_front_page()) {echo "Work";} else { wp_title("", true); }?>">
<!--[if lt IE 7]><p class=chromeframe>Your browser <em>sucks</em>. <a href="http://browsehappy.com/">Upgrade to a real browser</a> or keep it but for the love of god <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a>. It's free, installs in seconds even in a corporate environment, and you'll get the full experience on many sites.</p><![endif]-->

	<div class="global-header-container">
		<header class="wrapper clearfix">
			
			<div class="animated-header-bg"></div>
			
			<div class="masthead clearfix">	
				<div class="logo">Krimo Hafsaoui<br /><em>Web designer &amp; developer.</em></div>
				<nav class="global-nav">
					<ul>
						<li><a href="work/" class="main-nav-link <?php if (is_page("work")) {echo "active";} ?>">Work</a></li>
						<li><a href="blog/" class="main-nav-link <?php if (is_single() || is_page("blog")) {echo "active";} ?>">Blog</a></li>
						<li><a href="about/" class="main-nav-link <?php if (is_page("about")) {echo "active";} ?>">About</a></li>
						<li><a href="contact/" class="main-nav-link <?php if (is_page("contact")) {echo "active";} ?>">Contact</a></li>
					</ul>
				</nav>
			</div>
						
			<h1 class="page-title <?php if (is_single()) {echo "single";} ?>"><?php if (is_front_page()) {echo "Work";} else { wp_title("", true); }?></h1>
		</header>
	</div>
	<div id="main-container">
		<div id="main" class="wrapper clearfix">