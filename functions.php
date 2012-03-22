<?php
	
	/******************************************************************************/
	/* EXTRA USER FORM FIELDS */
	
	add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'bbp_user_edit_after', 'my_show_extra_profile_fields' );

	function my_show_extra_profile_fields( $user ) { ?>

		<h3 class="entry-title">UQ Student/Alumni Information</h3>
		
		
		<fieldset class="bbp-form">
			<div>
					<label for="student-number">Student Number <span class="description">(If you are a current student)</span></label>
					<input type="text" name="student-number" id="student-number" value="<?php echo esc_attr( get_the_author_meta( 'student-number', bbp_get_current_user_id() ) ); ?>" class="regular-text code" />
				</div>
				<div>
					<label for="course">Course Studying <span class="description">(If you are a current student)</span></label>
					<input type="text" name="course" id="course" value="<?php echo esc_attr( get_the_author_meta( 'course', bbp_get_current_user_id() ) ); ?>" class="regular-text" />
				</div>
				<div>
					<label for="international">International Student?</label>
					<select name="international" id="international">
						<option value="no" <?php if (get_the_author_meta('international', bbp_get_current_user_id()) == "no") { echo "selected='selected'"; } ?>>No</option>
						<option value="yes" <?php if (get_the_author_meta('international', bbp_get_current_user_id()) == "yes") { echo "selected='selected'"; } ?>>Yes</option>
					</select>
				</div>
				<div>
					<label for="graduation">Graduation Year <span class="description">(If you are a past student)</span></label>
					<input type="text" name="graduation" id="graduation" value="<?php echo esc_attr( get_the_author_meta( 'graduation', bbp_get_current_user_id() ) ); ?>" class="regular-text" />
				</div>
			</fieldset>
			
	<?php }
	
	add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
	add_action( 'bbp_user_profile_update', 'my_save_extra_profile_fields' );

	function my_save_extra_profile_fields( $user_id ) {

		echo "test";

		if ( !current_user_can( 'edit_user', $user_id ) )
			return false;

		update_usermeta( $user_id, 'student-number', $_POST['student-number'] );
		update_usermeta( $user_id, 'course', $_POST['course'] );
		update_usermeta( $user_id, 'international', $_POST['international'] );
		update_usermeta( $user_id, 'graduation', $_POST['graduation'] );
		
	}
	
	
	/******************************************************************************/
	/* CUSTOM LOGIN LOGO */

	function my_custom_login_logo() {
	    echo '<style type="text/css">
	        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/login-logo.png) !important; }
	    </style>';
	}

	add_action('login_head', 'my_custom_login_logo');

	/******************************************************************************/
	/* BBPRESS THEME */

	add_theme_support('bbpress');
	
	/******************************************************************************/
	/* BBPRESS MARKDOWN FILTERS */
	
	remove_filter('pre_post','bb_autop',60);
	remove_filter('pre_post','force_balance_tags');
	remove_filter('pre_post','bb_encode_bad',10);
	remove_filter('pre_post','bb_code_trick',10);
	remove_filter('post_text','make_clickable');
	remove_filter('edit_text','bb_code_trick_reverse',10);
	remove_filter('edit_text','htmlspecialchars',10);
	remove_filter('pre_post','bb_filter_kses',50);
	add_filter('post_text','Markdown', 6);
	add_filter('post_text','force_balance_tags',9);
	add_filter('post_text', 'mdwp_hide_tags', 49);
	add_filter('post_text','bb_filter_kses',50);
	add_filter('post_text', 'mdwp_show_tags', 51);
	add_filter('bbp_get_reply_content', 'Markdown', 20);
	add_filter( 'bb_allowed_tags', 'allow_extra_markdown_tags' );
	

	/******************************************************************************/
	/* COMMENTS LIST */
	
	function lucia_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;

?>

		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.'); ?></em>
			<?php endif; ?>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="comment-meta">
				<?php
					printf( __( 'By %1$s on %2$s'),
						sprintf( '<span>%s</span>', get_comment_author_link() ),
						sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
							esc_url( get_comment_link( $comment->comment_ID ) ),
							get_comment_time( 'c' ),
							sprintf( __( '%1$s at %2$s'), get_comment_date(), get_comment_time() )
						)
					);
				?>
			</div>
		
		</li>

<?php

	}
	
?>