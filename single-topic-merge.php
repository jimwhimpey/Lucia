<?php

/**
 * Merge topic page
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php get_header(); ?>

	<div class="main">
		
		<div class="page post forum col-a content">

			<?php do_action( 'bbp_template_notices' ); ?>

			<?php while ( have_posts() ) the_post(); ?>

				<div id="bbp-edit-page" class="bbp-edit-page">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">

						<?php bbp_get_template_part( 'bbpress/form', 'topic-merge' ); ?>

					</div>
				</div><!-- #bbp-edit-page -->

		</div>

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>