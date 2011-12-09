<?php get_header(); ?>

	<div class="blurb"><p>We are a bicycle racing club based at the University of Queensland in Brisbane, Australia. 
			Our club has a reputation as one of Australia’s leading clubs and has produced a number of National, Commonwealth, 
			and Olympic Champions.</p></div>

	<div class="main">
		
		<div class="content">
			
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
				
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
				</div>

				<div class="entry-utility">
					<?php if ( count( get_the_category() ) ) : ?>
						<span class="cat-links">
							<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
						</span>
					<?php endif; ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
					<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
				</div>
				
			</div>


    <?php endwhile; ?>

<?php
}	
	$wp_query = $temp;  //reset back to original query
	

?>
			
			
			
			
			
			
			
			
			
			
			
		</div>
		
		<div class="sidebar">
			
			
		</div>


	</div>

<?php get_footer(); ?>
