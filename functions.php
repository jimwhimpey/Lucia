<?php

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