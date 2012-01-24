<?php

/**
 * Template Name: bbPress - Topics (No Replies)
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

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="topics-front" class="bbp-topics-front">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">

						<?php the_content(); ?>

						<?php bbp_breadcrumb(); ?>

						<?php bbp_set_query_name( 'bbp_no_replies' ); ?>

						<?php if ( bbp_has_topics( array( 'meta_key' => '_bbp_reply_count', 'meta_value' => '1', 'meta_compare' => '<', 'orderby' => 'date', 'show_stickies' => false ) ) ) : ?>

							<?php bbp_get_template_part( 'bbpress/pagination', 'topics'    ); ?>

							<?php bbp_get_template_part( 'bbpress/loop',       'topics'    ); ?>

							<?php bbp_get_template_part( 'bbpress/pagination', 'topics'    ); ?>

						<?php else : ?>

							<?php bbp_get_template_part( 'bbpress/feedback',   'no-topics' ); ?>

						<?php endif; ?>

						<?php bbp_reset_query_name(); ?>

					</div>
				</div><!-- #topics-front -->

			<?php endwhile; ?>

		</div>

		<?php get_sidebar(); ?>
		
	</div>
	
<?php get_footer(); ?>
