<?php get_header(); ?>

	<div class="main">

		<div class="blog col-a content">
			
			<h2>Latest Club News</h2>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

					<div class="entry-content">
						<?php global $more; $more = 0; the_content("More..."); ?>
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

			<?php endwhile;  ?>
		
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div class="post-nav">
					<div class="older"><?php next_posts_link( __( '<span>&larr;</span> Older', '' ) ); ?></div>
					<div class="newer"><?php previous_posts_link( __( 'Next <span>&rarr;</span>', '' ) ); ?></div>
				</div>
			<?php endif; ?>
		
		</div>
		
		<?php get_template_part('sidebar'); ?>

	</div>

<?php get_footer(); ?>
