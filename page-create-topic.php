<?php

/**
 * Template Name: bbPress - Create Topic
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

					<div id="bbp-new-topic" class="bbp-new-topic">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="entry-content">

							<?php the_content(); ?>

							<?php bbp_get_template_part( 'bbpress/form', 'topic' ); ?>

						</div>
					</div><!-- #bbp-new-topic -->

				<?php endwhile; ?>

		</div>

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>
