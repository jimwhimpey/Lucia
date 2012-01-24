<?php

/**
 * User Profile
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

			<div id="bbp-user-<?php bbp_current_user_id(); ?>" class="bbp-single-user">
				
				<h2><?php printf( __( 'Profile: %s', 'bbpress' ), "<span class='vcard'><a class='url fn n' href='" . bbp_get_user_profile_url() . "' title='" . esc_attr( bbp_get_displayed_user_field( 'display_name' ) ) . "' rel='me'>" . bbp_get_displayed_user_field( 'display_name' ) . "</a></span>" ); ?></h2>
				
				<div class="entry-content">

					<?php bbp_get_template_part( 'bbpress/content', 'single-user' ); ?>

				</div><!-- .entry-content -->
			</div><!-- #bbp-user-<?php bbp_current_user_id(); ?> -->

		</div>

		<?php 
			$forum = true;
			get_sidebar();
		?>

	</div>

<?php get_footer(); ?>
