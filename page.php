<?php get_header(); ?>

	<div class="main">

		<?php // echo "<pre>"; print_r($post); echo "</pre>"; ?>

		<?php if ($post->post_parent == 17) { // If a child of the racing page (i.e. scores) ?>
			<div class="page post col-a content results-page">
		<?php } else { ?>
			<div class="page post col-a content">
		<?php } ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<h2><?php the_title(); ?></h3>

					<div class="entry-content">
						<?php global $more; $more = 0; the_content("More..."); ?>
					</div>
				
				</div>			

			<?php endwhile;  ?>
		
		</div>
		
		<?php get_sidebar(); ?>
		
	</div>		

<?php get_footer(); ?>
