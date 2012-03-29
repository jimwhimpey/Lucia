<?php

/**
 * Replies Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

	<tr class="bbp-reply-header">
		<td colspan="2">
			
			<a href="<?php bbp_reply_url(); ?>" title="<?php bbp_reply_title(); ?>" class="bbp-reply-permalink"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp')) . " ago"; ?></a>

			<?php do_action( 'bbp_theme_before_reply_admin_links' ); ?>
			
			<span class="bbp-admin-links">
				<?php 
					if (bbp_is_topic(bbp_get_reply_id())) {
						if (current_user_can('edit_user')) {
							bbp_user_subscribe_link();
						} else {
							bbp_user_subscribe_link(array("before" => ""));
						}
					}
			 	?>
				<a class="quotes_link" href="javascript:void(null)" title="<?php bbp_reply_author(); ?>">Quote</a>
			</span>

			<?php bbp_reply_admin_links(array("after" => " |&nbsp;")); ?>

			<?php do_action( 'bbp_theme_after_reply_admin_links' ); ?>

		</td>
	</tr>

	<tr id="post-<?php bbp_reply_id(); ?>" <?php bbp_reply_class(); ?>>

		<td class="bbp-reply-author">

			<?php do_action( 'bbp_theme_before_reply_author_details' ); ?>

			<?php bbp_reply_author_link( array( 'sep' => '', 'size' => '80' ) ); ?>

			<p class="pm-link"><a href="<?php bloginfo('url'); ?>/private-messages/?page=rwpm_send&amp;recipient=<?php the_author(); ?>">PM</a></p>

			<?php if ( is_super_admin() ) : ?>

				<?php do_action( 'bbp_theme_before_reply_author_admin_details' ); ?>

				<div class="bbp-reply-ip"><?php // bbp_author_ip( bbp_get_reply_id() ); ?></div>

				<?php do_action( 'bbp_theme_after_reply_author_admin_details' ); ?>

			<?php endif; ?>

			<?php do_action( 'bbp_theme_after_reply_author_details' ); ?>

		</td>

		<td class="bbp-reply-content">

			<?php do_action( 'bbp_theme_after_reply_content' ); ?>
			<div class="content">
				<?php echo Markdown(bbp_get_reply_content()); ?>
			</div>

			<?php do_action( 'bbp_theme_before_reply_content' ); ?>

		</td>

	</tr><!-- #post-<?php bbp_topic_id(); ?> -->
