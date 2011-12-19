<?php

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