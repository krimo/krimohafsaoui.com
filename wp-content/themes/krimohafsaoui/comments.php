<section class="comments" id="commentssection">
	<h2 class="comments-header"><?php comments_number("Leave the first comment", "1 comment", "% comments"); ?></h2>
	
	<?php wp_list_comments('type=comment&callback=format_comment'); ?>
	
	<div class="kh-form">
		<?php comment_form(array(
			'comment_notes_before' => '',
			'comment_notes_after' => '',
			'title_reply' => ''
		)); ?>
	</div>
	
</section> <!-- .comments -->