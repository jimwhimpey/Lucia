<div class="flickr">
	<h2><a href="http://www.flickr.com/photos/uqcycle">Latest Club Photos</a></h2>
	
	<ul>
		
		<?php
		
			// Get the Calendar data from Flickr
			$contents = file_get_contents("http://api.flickr.com/services/feeds/photos_public.gne?id=42612547@N03&lang=en-us&format=json");
			$contents = preg_replace('/.+?({.+}).+/','$1',$contents);
			$json = json_decode($contents);

			echo "<pre>";
			print_r($json);
			echo "</pre>";
		
		?>
		
	</ul>
	
	
	
</div>