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

			<?php bbp_reply_admin_links(); ?>

			<?php do_action( 'bbp_theme_after_reply_admin_links' ); ?>

		</td>
	</tr>

	<tr id="post-<?php bbp_reply_id(); ?>" <?php bbp_reply_class(); ?>>

		<td class="bbp-reply-author">

			<?php do_action( 'bbp_theme_before_reply_author_details' ); ?>

			<?php bbp_reply_author_link( array( 'sep' => '' ) ); ?>

			<?php if ( is_super_admin() ) : ?>

				<?php do_action( 'bbp_theme_before_reply_author_admin_details' ); ?>

				<div class="bbp-reply-ip"><?php // bbp_author_ip( bbp_get_reply_id() ); ?></div>

				<?php do_action( 'bbp_theme_after_reply_author_admin_details' ); ?>

			<?php endif; ?>

			<?php do_action( 'bbp_theme_after_reply_author_details' ); ?>

		</td>

		<td class="bbp-reply-content">

			<?php do_action( 'bbp_theme_after_reply_content' ); ?>

			<?php bbp_reply_content(); ?>

			<?php do_action( 'bbp_theme_before_reply_content' ); ?>

		</td>

	</tr><!-- #post-<?php bbp_topic_id(); ?> -->
