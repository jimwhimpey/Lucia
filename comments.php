<div id="comments">

	<?php if ( have_comments() ) : ?>
		
		<h2> <?php printf( _n('1 Comment', '%1$s Comments;', get_comments_number())); ?> </h2>

		<ol class="commentlist">
			<?php wp_list_comments(array('callback' => 'lucia_comment') ); ?>
		</ol>

	<?php endif; ?>

	<?php comment_form(array("title_reply" => __('Leave a Comment'), "comment_notes_after" => "", "label_submit" => "Comment")); ?>

</div>
