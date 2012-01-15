<div class="col-b latest-topics">
	<h2>Latest Discussion</h2>

	<?php
	
		// Get the latest topics
		$topics = new WP_Query(array('posts_per_page' => 10, 'post_type' => array('topic', 'reply')));

		echo "<ul>";
		// Loop through and list them
		while ( $topics->have_posts() ) : $topics->the_post();
			// Get the URL pointing to the post
			if ($post->post_type == "reply") {
				echo "<li><a href='" . get_permalink($post->post_parent) . "#post-" . get_the_ID() . "'>" . get_the_title() . "</a> ";
			} else {
				echo "<li><a href='" . get_permalink() . "'>" . get_the_title() . "</a> ";
			}
			echo "<span>" . human_time_diff( get_the_time('U'), current_time('timestamp') ) . " ago by <span>" . get_the_author() . "</span></span>";
			echo "</li>";
		endwhile;
		echo "</ul>";
		
		// Reset Post Data
		wp_reset_postdata();
	
	?>

</div>