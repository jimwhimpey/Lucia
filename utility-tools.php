<div class="col-b tools">
	<?php if(is_user_logged_in()) { ?>
		<?php global $current_user; ?>
		<p>Logged in as <a href="<?php echo home_url() . '/forum/users/' . $current_user->user_login . '/'; ?>"><?php echo $current_user->display_name; ?></a></p>
		<ul>
			<li><a href="">Private messages</a></li>
			<li><a href="<?php echo home_url() . '/forum/users/' . $current_user->user_login . '/edit/'; ?>">Edit profile</a></li>
			<li><a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
		</ul>
	<?php } ?>
</div>
