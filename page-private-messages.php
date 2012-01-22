<?php
	if (!is_user_logged_in()) {
		redirect_to_login_url();
	}
?>

<?php get_header(); ?>

	<script type="text/javascript">
		// Switch between send page, inbox and outbox
		function pmSwitch(page) {
			document.getElementById('pm-send').style.display = 'none';
			document.getElementById('pm-inbox').style.display = 'none';
			document.getElementById('pm-outbox').style.display = 'none';
			document.getElementById(page).style.display = '';
			return false;
		}
	</script>
	<script type="text/javascript" src="<?php echo WP_PLUGIN_URL; ?>/private-messages-for-wordpress/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_PLUGIN_URL; ?>/private-messages-for-wordpress/js/jquery.autoSuggest.packed.js"></script>
	<script type="text/javascript" src="<?php echo WP_PLUGIN_URL; ?>/private-messages-for-wordpress/js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/private-messages-for-wordpress/css/style.css" />
	
	

	<div class="main">

		<div class="page post col-a content private-messages">

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<h2><?php the_title(); ?></h3>
						
					<a href="javascript:void(0);" onclick="pmSwitch('pm-send');">Send</a> | <a href="javascript:void(0);" onclick="pmSwitch('pm-inbox');">Inbox</a> | <a href="javascript:void(0);" onclick="pmSwitch('pm-outbox');">Outbox</a>					
					
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
		
		<?php get_sidebar(); ?>
		
	</div>		

<?php get_footer(); ?>
