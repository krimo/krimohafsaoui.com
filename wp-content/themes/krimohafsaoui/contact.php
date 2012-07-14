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
			<div id="errors"><span>There are errors in the form.</span></div>
			<div id="success"><span>Your message has been sent.</span></div>
			<h2>Fill out this form, I'll answer in 48h tops</h2>
			<form action="<?php bloginfo('template_directory'); ?>/kh-process.php" class="kh-form" method="POST">
				<fieldset>
					<label for="contact_form_name">Name:</label><input name="contact_form_name" id="contact_form_name" type="text" required/>

					<label for="contact_form_email">Email:</label><input name="contact_form_email" id="contact_form_email" type="email" required/>

					<label for="contact_form_body">Your message:</label><textarea name="contact_form_body" id="contact_form_body" cols="30" rows="10" required></textarea>
					
					<div id="loading" class="spinner">
					    <div class="bar1"></div>
					    <div class="bar2"></div>
					    <div class="bar3"></div>
					    <div class="bar4"></div>
					    <div class="bar5"></div>
					    <div class="bar6"></div>
					    <div class="bar7"></div>
					    <div class="bar8"></div>
					    <div class="bar9"></div>
					    <div class="bar10"></div>
					    <div class="bar11"></div>
					    <div class="bar12"></div>
					</div>
					<button type="submit" class="kh-contact-submit">Send &raquo;</button>
				</fieldset>
			</form>
		</section>
	<?php endwhile; endif; ?>
</article><!-- .main-content -->
<?php get_footer(); ?>