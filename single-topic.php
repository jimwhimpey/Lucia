<?php

/**
 * Single Topic
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php
	// If the user isn't logged in, redirect them to the homepage
	if (!is_user_logged_in()) {
		header("Location: " . get_bloginfo('url') . "/forum/");
		die();
	}
?>

<?php get_header(); ?>

	<div class="main">
		
		<div class="page post forum col-a content">

			<?php do_action( 'bbp_template_notices' ); ?>

			<?php if ( bbp_user_can_view_forum( array( 'forum_id' => bbp_get_topic_forum_id() ) ) ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div id="bbp-topic-wrapper-<?php bbp_topic_id(); ?>" class="bbp-topic-wrapper">
						
						<h2 class="entry-title">Forum</h2>
						<?php bbp_breadcrumb(); ?>
						
						<div class="entry-content">

							<?php bbp_get_template_part( 'bbpress/content', 'single-topic' ); ?>

						</div>
					</div><!-- #bbp-topic-wrapper-<?php bbp_topic_id(); ?> -->

				<?php endwhile; ?>

			<?php elseif ( bbp_is_forum_private( bbp_get_topic_forum_id(), false ) ) : ?>

				<?php bbp_get_template_part( 'bbpress/feedback', 'no-access' ); ?>

			<?php endif; ?>

		</div><!-- #container -->

		<?php get_sidebar(); ?>
		
	</div>	
	
<?php get_footer(); ?>
