<?php get_header(); ?>

	<div class="blurb"><p>We are a bicycle racing club based at the University of Queensland in Brisbane, Australia. 
			Our club has a reputation as one of Australia’s leading clubs and has produced a number of National, Commonwealth, 
			and Olympic Champions.</p></div>

	<div class="main">
		
		<div class="blog col-a content">
			
			<h2>Latest Club News</h2>
			
			<?php

				$args = array(
				  'orderby' => 'date',
				  'order' => 'DESC',
				  'posts_per_page' => 10
				);
				$temp = $wp_query;  // assign orginal query to temp variable for later use   
				$wp_query = null;
				$wp_query = new WP_Query($args); 
				
  				if( have_posts() ) { 
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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

    		<?php 
					endwhile;
				}	
				$wp_query = $temp;  //reset back to original query
			?>
			
			<div class="post-nav">
				<div class="older"><a href="<?php bloginfo('url'); ?>/news"><span>&larr;</span> Older News</a></div>
			</div>
			
		</div>
		
		<?php get_template_part('sidebar'); ?>

	</div>
	
	<?php get_template_part('utility-flickr'); ?>

<?php get_footer(); ?>
