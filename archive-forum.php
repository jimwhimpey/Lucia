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
			
			<?php if (!is_user_logged_in()) { // Not logged in ?>
				
				<h2>Forum</h2>
				
				<div class="entry-content forum-logged-out">
					
					<p>The forum is only open to UQCC members.</p>
					
					
					<h3>Login</h3>
					
					<p>Your username will always be first name followed by surname even if you've changed 
						your display name.</p>
						
					<?php wp_login_form( $args ); ?> 
					
					
					<h3>If This Is Your First Time Logging In...</h3>
					
					<p>Use your first name followed by your surname as your username (eg. jimwhimpey) as your username 
					and your date of birth in this format YYYYMMDD (eg. 19871205) as your password. Once inside you can 
					change both your display name and password.</p>
					
					
					<h3>If You're Not a Club Member...</h3>
					
					<p>Look into <a href="../how-to-join/">how to join.</a></p>
					
					
					<h3>If You've Forgotten Your Password...</h3>
					
					<p><a href="<?php bloginfo('url'); ?>/wp-login.php?action=lostpassword">Use this form</a>.</p>
					
					
				</div>
				
			<?php } else { // Logged in ?>

				<?php do_action( 'bbp_template_notices' ); ?>

				<div id="forum-front" class="bbp-forum-front">
					<h2 class="entry-title">Forum</h2>
					<div class="entry-content">

						<?php bbp_get_template_part( 'bbpress/content', 'archive-forum' ); ?>

					</div>
				</div>

			<?php } ?>
		
		</div>
		
		<?php 
			$forum = true;
			get_sidebar();
		?>
	
	</div>
	
<?php get_footer(); ?>
