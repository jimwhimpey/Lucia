<?php
	
	// Determine if we're on a forum page
	global $forum;
	if ($post->post_type == 'forum' || $post->post_type == 'topic' || $post->post_type == 'reply' || $forum == true || $post->ID == 306) {
		$is_forum = true;
	}
	
	// If we're on a forum page
	if ($is_forum) {
		if(is_user_logged_in()) {
			get_template_part('sidebar/utility', 'tools');
			get_template_part('sidebar/utility', 'topics');
		}
	}

	// If the racing page or a child of it
	if (is_page('racing') || $post->post_parent == 17) {
		get_template_part('sidebar/utility', 'results');
	}
	
	// If is the contact page or the racing page or a child of the racing page or the calendar page, not forum
	if (!is_page('contact') && !is_page('racing') && $post->post_parent != 17 && !is_page('calendar') && !$is_forum) {
		get_template_part('sidebar/utility', 'calendar');
	}

	// Strava link, just on homepage
	if (is_front_page()) {
		get_template_part('sidebar/utility', 'strava');
	}

	// All Pages
	get_template_part('sidebar/utility', 'sponsors');
	
?>
