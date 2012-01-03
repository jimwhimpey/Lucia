<?php

/**
 * User Profile
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php get_header(); ?>

	<div class="main">
		
		<div class="page post forum col-a content">

			<div id="bbp-user-<?php bbp_current_user_id(); ?>" class="bbp-single-user">
				<div class="entry-content">

					<?php bbp_get_template_part( 'bbpress/content', 'single-user' ); ?>

				</div><!-- .entry-content -->
			</div><!-- #bbp-user-<?php bbp_current_user_id(); ?> -->

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>
