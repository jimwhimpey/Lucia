<?php

	if (is_page('racing-results')) {
		get_template_part('utility-subpages');
	} else {
		get_template_part('utility-calendar');
	}

	get_template_part('utility-sponsors');
	
?>
