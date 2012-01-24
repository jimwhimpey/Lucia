<?php

/**
 * Template Name: bbPress - User Lost Password
 *
 * @package bbPress
 * @subpackage Theme
 */

 	// If the user isn't logged in, redirect them to the homepage
 	if (!is_user_logged_in()) {
 		header("Location: " . get_bloginfo('url') . "/forum/");
 		die();
 	}

// No logged in users
bbp_logged_in_redirect();

// Begin Template
get_header(); ?>

	<div class="main">
		
		<div class="page post forum col-a content">

			<?php do_action( 'bbp_template_notices' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="bbp-lost-pass" class="bbp-lost-pass">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">

						<?php the_content(); ?>

						<?php bbp_breadcrumb(); ?>

						<?php bbp_get_template_part( 'bbpress/form', 'user-lost-pass' ); ?>

					</div>
				</div><!-- #bbp-lost-pass -->

			<?php endwhile; ?>

		</div>

		<?php get_sidebar(); ?>
		
	</div>
		
<?php get_footer(); ?>
