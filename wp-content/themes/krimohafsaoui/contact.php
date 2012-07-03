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
	<section>
		<h2>I will not respond to you if&hellip;</h2>
		<ul class="no-reply-if">
			<li>You enquire about free work.</li>
			<li>You write your email like a teenage girl would write an sms. This is just disrespectful.</li>
			<li>You don't understand that the world does not, in fact, revolve around you. Lack of planning on your part does not constitute an emergency on my part.</li>
			<li>You're an idiot.</li>
		</ul>
		</section>
		<section>
			<h2>On critiques&hellip;</h2>
			<p>Grammar nazis are welcome. This website being a one-man operation, mistakes will surely be made despite proofreading as much as I can (thanks, tunnel vision). You're also more than welcome to criticize the design or functionality of these pages. If you do so intelligently and respectfully, that is.</p>
		</section>
		<section>
			<h2>Maybe we could work together.</h2>
			<p>As long as you understand that I do not work <em>for</em> you but <em>with</em> you. The client <em>is absolutely not</em> king. You're about as responsible as I am for the success of the solution I will provide you with. I believe an honest business relationship is the key to success, and therefore will not hesitate to call you out on your <a href="http://www.makemylogobiggercream.com/">bad decisions</a>. I expect the same from you. You know your craft, I know mine, let's respect each other.</p>
		</section>
	<section>
		<h2>Fill out this form, I'll answer in 48h tops</h2>
		<form action="" class="kh-form">
			<fieldset>
				<label for="contact_form_name">Name:</label>
				<input type="text" required/>

				<label for="contact_form_email">Email:</label>
				<input type="email" required/>

				<label for="contact_form_body">Your message:</label>
				<textarea name="contact_form_body" id="" cols="30" rows="10" required></textarea>

				<button type="submit">Send &raquo;</button>
			</fieldset>
		</form>
	</section>
</article><!-- .main-content -->
<?php get_footer(); ?>