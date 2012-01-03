<?php

/**
 * Template Name: bbPress - Forums (Index)
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php get_header(); ?>

	<div class="main">
		
		<div class="page post forum col-a content">

			<?php do_action( 'bbp_template_notices' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="forum-front" class="bbp-forum-front">
					<h1 class="entry-title">Forum</h1>
					<div class="entry-content">

						<?php the_content(); ?>

						<?php bbp_get_template_part( 'bbpress/content', 'archive-forum' ); ?>

					</div>
				</div><!-- #forum-front -->

			<?php endwhile; ?>

		</div><!-- #container -->

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>
