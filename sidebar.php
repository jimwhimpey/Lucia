<?php

	// If the racing page or a child of it
	if (is_page('racing') || $post->post_parent == 17) {
		get_template_part('utility-results');
	}
	
	// If is the contact page or the racing page or a child of the racing page or the calendar page
	if (!is_page('contact') && !is_page('racing') && $post->post_parent != 17 && !is_page('calendar')) {
		get_template_part('utility-calendar');
	}

	get_template_part('utility-sponsors');
	
?>
