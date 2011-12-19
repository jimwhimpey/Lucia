<div id="comments">

	<?php if ( have_comments() ) : ?>
		
		<h3><?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), '' ),
					number_format_i18n(get_comments_number()), '' ); ?></h3>

		<ol class="commentlist">
			<?php wp_list_comments(array('callback' => 'lucia_comment') ); ?>
		</ol>

	<?php endif; ?>

	<?php comment_form(array("title_reply" => __('Leave a Comment'), "comment_notes_after" => "", "label_submit" => "Comment")); ?>

</div>
