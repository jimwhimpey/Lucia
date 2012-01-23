<?php
	if (!is_user_logged_in()) {
		redirect_to_login_url();
	}
?>

<?php get_header(); ?>
	
	<div class="main">

		<div class="page post col-a content private-messages">

				<div id="" <?php post_class(); ?>>
				
					<h2><?php the_title(); ?></h3>
					
					<div class="entry-content">
					
						<a href="?">Send</a> | <a href="?page=rwpm_inbox">Inbox</a> | <a href="?page=rwpm_outbox">Outbox</a>					
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php
								$show = array(true, false, false);
								if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'rwpm_inbox') {
									$show = array(false, true, false);
								} elseif (isset($_REQUEST['page']) && $_REQUEST['page'] == 'rwpm_outbox') {
									$show = array(false, false, true);
								}
								?>
								<div id="pm-send" <?php if (!$show[0]) echo 'style="display:none"'; ?>><?php rwpm_send();?></div>
								<div id="pm-inbox" <?php if (!$show[1]) echo 'style="display:none"'; ?>><?php rwpm_inbox();?></div>
								<div id="pm-outbox" <?php if (!$show[2]) echo 'style="display:none"'; ?>><?php rwpm_outbox();?></div>
						<?php endwhile; endif; ?>
						
					</div>
				
				</div>			
		
		</div>
		
		<?php get_sidebar(); ?>
		
	</div>		

<?php get_footer(); ?>
