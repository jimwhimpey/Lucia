<?php
	
	// If we're on a forum page
	if ($post->post_type == 'forum' || $post->post_type == 'topic') {
		get_template_part('utility-topics');
	}

	// If the racing page or a child of it
	if (is_page('racing') || $post->post_parent == 17) {
		get_template_part('utility-results');
	}
	
	// If is the contact page or the racing page or a child of the racing page or the calendar page, not forum
	if (!is_page('contact') && !is_page('racing') && $post->post_parent != 17 && !is_page('calendar') && $post->post_type != 'forum' && $post->post_type != 'topic') {
		get_template_part('utility-calendar');
	}

	get_template_part('utility-sponsors');
	
?>
