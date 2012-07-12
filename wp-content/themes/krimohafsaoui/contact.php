<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<aside class="sidebar">
	<p>Please take the time to <strong>actually read the following</strong> before attempting to contact me. You <strong>will not</strong> get an answer if you don't.</p>
</aside>

<article class="main-content">
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<?php the_content(); ?>		
		<section>
			<div id="errors">Errors</div>
			<div id="success">Success</div>
			<div id="loading">
				<div id="circularG_1" class="circularG"></div>
				<div id="circularG_2" class="circularG"></div>
				<div id="circularG_3" class="circularG"></div>
				<div id="circularG_4" class="circularG"></div>
				<div id="circularG_5" class="circularG"></div>
				<div id="circularG_6" class="circularG"></div>
				<div id="circularG_7" class="circularG"></div>
				<div id="circularG_8" class="circularG"></div>
			</div>
			<h2>Fill out this form, I'll answer in 48h tops</h2>
			<form action="<?php bloginfo('template_directory'); ?>/kh-process.php" class="kh-form">
				<fieldset>
					<label for="contact_form_name">Name:</label><input type="text" required/>

					<label for="contact_form_email">Email:</label><input type="email" required/>

					<label for="contact_form_body">Your message:</label><textarea name="contact_form_body" id="" cols="30" rows="10" required></textarea>

					<button type="submit" class="kh-contact-submit">Send &raquo;</button>
				</fieldset>
			</form>
		</section>
	<?php endwhile; endif; ?>
</article><!-- .main-content -->
<?php get_footer(); ?>