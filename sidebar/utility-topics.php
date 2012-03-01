<div class="col-b latest-topics">
	<h2>Latest Discussion</h2>

	<?php
	
		// Get the latest topics, ordered by the last reply date
		$topics = new WP_Query(array('posts_per_page' => 10, 'post_type' => array('topic'), 'meta_key' => '_bbp_last_active_time', 'orderby' => 'meta_value', 'order' => 'DESC'));
		
		echo "<ul>";
		
		// Loop through and list them
		while ( $topics->have_posts() ): $topics->the_post();
		
			$topicPermalink = get_permalink();
			$topicTitle = get_the_title();
			$topicAuthor = get_the_author();
			$topicTime = human_time_diff( get_the_time('U'), current_time('timestamp') );
		
			// Default of no responses
			$response = false;
		
			// Get the last response
			$responses = new WP_Query(array('posts_per_page' => 1, 'post_type' => array('reply'), 'orderby' => 'date', 'order' => 'DESC', 'post_parent' => get_the_ID()));
			while ( $responses->have_posts() ) : $responses->the_post();
				$response = true;
				$lastResponseAuthor = get_the_author();
				$lastResponseID = get_the_ID();
				$lastResponseTime = human_time_diff( get_the_time('U'), current_time('timestamp') );
			endwhile;
		
			// Get the URL pointing to the post
			echo "<li><a href='" . $topicPermalink . "#post-" . $lastResponseID . "'>" . $topicTitle  . "</a> ";
			if ($response) {
				echo "<span>Last reply " . $lastResponseTime . " ago by <span>" . $lastResponseAuthor . "</span></span>";
			} else {
				echo "<span>" . $topicTime . " ago by <span>" . $topicAuthor . "</span></span>";
			}
			echo "</li>";
			
		endwhile;
		
		echo "</ul>";
		
		// Reset Post Data
		wp_reset_postdata();
	
	?>

</div>

<?php

?>