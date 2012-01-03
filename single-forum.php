<?php

/**
 * Single Forum
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

				<?php if ( bbp_user_can_view_forum() ) : ?>

					<div id="forum-<?php bbp_forum_id(); ?>" class="bbp-forum-content">
						
						<?php bbp_breadcrumb(); ?>
						
						<h2 class="entry-title">Forum: <?php bbp_forum_title(); ?></h2>
						<div class="entry-content">

							<?php bbp_get_template_part( 'bbpress/content', 'single-forum' ); ?>

						</div>
					</div><!-- #forum-<?php bbp_forum_id(); ?> -->

				<?php else : // Forum exists, user no access ?>

					<?php bbp_get_template_part( 'bbpress/feedback', 'no-access' ); ?>

				<?php endif; ?>

			<?php endwhile; ?>

		</div>

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>
