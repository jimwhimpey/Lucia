<?php

/**
 * User Details
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

	<?php if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) : ?>
		<p class="edit_user_link"><a href="<?php bbp_user_profile_edit_url(); ?>" title="<?php printf( __( 'Edit Profile of User %s', 'bbpress' ), esc_attr( bbp_get_displayed_user_field( 'display_name' ) ) ); ?>"><?php _e( 'Edit profile', 'bbpress' ); ?></a></p>
	<?php endif; ?>

	<!-- <div id="entry-author-info"> -->
		
		<!--<div id="author-avatar">
			<?php // echo get_avatar( bbp_get_displayed_user_field( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
		</div> #author-avatar -->
		
		<!-- <div id="author-description"> -->
			
			<!-- <h3><?php printf( __( 'About %s', 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?></h3> -->

			<!-- <?php echo bbp_get_displayed_user_field( 'description' ); ?> -->

		<!-- </div><!-- #author-description	-->
	<!-- </div><!-- #entry-author-info -->
