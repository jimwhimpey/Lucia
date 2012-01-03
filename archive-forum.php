<?php

/**
 * bbPress - Forum Archive
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php get_header(); ?>

	<div class="main">
		
		<div class="page post forum col-a content">

			<?php do_action( 'bbp_template_notices' ); ?>

			<div id="forum-front" class="bbp-forum-front">
				<h2 class="entry-title">Forum</h2>
				<div class="entry-content">

					<?php bbp_get_template_part( 'bbpress/content', 'archive-forum' ); ?>

				</div>
			</div>
		
		</div>
		
		<?php 
			$sidebar = true;
			get_sidebar();
		?>
	
	</div>
	
<?php get_footer(); ?>
