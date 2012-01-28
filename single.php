<?php get_header(); ?>

	<div class="main">
		
		<div class="blog col-a content single">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
					<h3 class="entry-title"><?php the_title(); ?></h3>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<div class="meta">
						<?php if ( count( get_the_category() ) ) : ?>
							<span class="cat-links">
								<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
							</span>
						<?php endif; ?>
						<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
						by <?php the_author(); ?> 
						| <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
					</div>
	
				</div>

				<?php comments_template( '', true ); ?>

				<div class="post-nav">
					<div class="older"><?php previous_post_link('%link','<span>&larr;</span> Previous post: %title'); ?></div>
					<div class="newer"><?php next_post_link('%link','Next post: %title <span>&rarr;</span>'); ?></div>
				</div>

			<?php endwhile;  ?>
		
		</div>
		
		<?php get_template_part('sidebar'); ?>

	</div>

<?php get_footer(); ?>
