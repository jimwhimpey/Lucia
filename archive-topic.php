<?php

/**
 * bbPress - Topic Archive
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php get_header(); ?>

	<div class="main">
		
		<div class="page post forum col-a content">

			<?php do_action( 'bbp_template_notices' ); ?>

			<div id="topic-front" class="bbp-topics-front">
				<h2 class="entry-title">Forum: <?php bbp_topic_archive_title(); ?></h2>
				<div class="entry-content">

					<?php bbp_get_template_part( 'bbpress/content', 'archive-topic' ); ?>

				</div>
			</div>
		
		</div>

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>
