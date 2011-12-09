<?php get_header(); ?>

	<div class="blurb"><p>We are a bicycle racing club based at the University of Queensland in Brisbane, Australia. 
			Our club has a reputation as one of Australia’s leading clubs and has produced a number of Olympic, 
			Commonwealth and National Champions.</p></div>

	<div class="main">

		<?php while ( have_posts() ) : the_post(); ?>

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

			<?php comments_template( '', true ); ?>

		<?php endwhile;  ?>


		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>
