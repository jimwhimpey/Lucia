<?php

/**
 * Template Name: bbPress - Topics (Newest)
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

				<div id="topics-front" class="bbp-topics-front">
					<h2 class="entry-title">Forum: <?php the_title(); ?></h2>
					<div class="entry-content">

						<?php the_content(); ?>

						<?php bbp_get_template_part( 'bbpress/content', 'archive-topic' ); ?>

					</div>
				</div><!-- #topics-front -->

			<?php endwhile; ?>

		</div>

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>
