<div class="col-b events">
	<h2>Latest Topics</h2>

	<?php
	
		// Get the latest topics
		$topics = new WP_Query(array('posts_per_page' => 10, 'post_type' => array('topic', 'reply')));

		echo "<ul>";
		// Loop through and list them
		while ( $topics->have_posts() ) : $topics->the_post();
			echo "<li><a href='" . get_permalink() . "'>" . get_the_title() . "</a> ";
			echo "<span>" . human_time_diff( get_the_time('U'), current_time('timestamp') ) . " ago" . "</span>";
			echo "</li>";
		endwhile;
		echo "</ul>";
		
		// Reset Post Data
		wp_reset_postdata();
	
	?>

</div>