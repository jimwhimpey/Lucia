<?php

/**
 * Single View
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

			<div id="bbp-view-<?php bbp_view_id(); ?>" class="bbp-view">
				<h1 class="entry-title"><?php bbp_view_title(); ?></h1>
				<div class="entry-content">

					<?php bbp_get_template_part( 'bbpress/content', 'single-view' ); ?>

				</div>
			</div><!-- #bbp-view-<?php bbp_view_id(); ?> -->

		</div>

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>
