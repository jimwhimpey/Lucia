<div class="col-b tools">
	<?php if(is_user_logged_in()) { ?>
		<?php global $current_user; ?>
		<p>Logged in as <a href="<?php echo home_url() . '/forum/users/' . $current_user->user_login . '/'; ?>"><?php echo $current_user->display_name; ?></a></p>
		
		<?php
			// Working out how many unread messages
			$msgs = $wpdb->get_results( 'SELECT `id`, `sender`, `subject`, `read`, `date` FROM ' . $wpdb->prefix . 'pm WHERE `recipient` = "' . $current_user->user_login . '" AND `deleted` != "2" AND `read` = "0" ORDER BY `date` DESC' );
			$unread = count($msgs);
		?>
		
		<ul>
			<li><a href="<?php echo home_url() . '/private-messages/?page=rwpm_inbox' ?>">Private messages <?php if ($unread > 0) { echo "<span>(" . $unread . " New)</span>"; } ?></a></li> 
			<li><a href="<?php echo home_url() . '/forum/users/' . $current_user->user_login . '/edit/'; ?>">Edit profile</a></li>
			<li><a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
		</ul>
	<?php } ?>
</div>
