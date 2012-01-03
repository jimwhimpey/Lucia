<?php

/**
 * Edit handler for replies
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php get_header(); ?>

	<div class="main">
		
		<div class="page post forum col-a content">

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="bbp-edit-page" class="bbp-edit-page">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">

						<?php bbp_get_template_part( 'bbpress/form', 'reply' ); ?>

					</div>
				</div><!-- #bbp-edit-page -->

			<?php endwhile; ?>

		</div>

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>
