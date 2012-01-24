<?php

/**
 * Edit handler for topics
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php
	// If the user isn't logged in, redirect them to the homepage
	if (!is_user_logged_in()) {
		header("Location: " . get_bloginfo('url') . "/forum/");
		die();
	}
?>

<?php get_header(); ?>

	<div class="main">
		
		<div class="page post forum col-a content">

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="bbp-edit-page" class="bbp-edit-page">
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php bbp_breadcrumb(); ?>
					
					<div class="entry-content">

						<?php bbp_get_template_part( 'bbpress/form', 'topic' ); ?>

					</div>
				</div><!-- #bbp-edit-page -->

			<?php endwhile; ?>

		</div>

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>
