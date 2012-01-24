<?php

/**
 * bbPress User Profile Edit
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
					
					<h2>Edit Your Profile</h2>
					
					<div class="entry-content">

						<?php bbp_get_template_part( 'bbpress/content', 'single-user-edit'   ); ?>

					</div><!-- .entry-content -->
				</div><!-- #bbp-user-<?php bbp_current_user_id(); ?> -->

		</div>

		<?php 
			$forum = true;
			get_sidebar();
		?>
		
	</div>
		
<?php get_footer(); ?>
