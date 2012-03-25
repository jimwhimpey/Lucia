<div class="flickr">
	<h2><a href="http://www.flickr.com/photos/uqcycle">Latest Club Photos</a></h2>
	
	<ul>
		
		<?php
		
			// Get the Calendar data from Flickr
			$contents = file_get_contents("http://api.flickr.com/services/feeds/photos_public.gne?id=42612547@N03&lang=en-us&format=json");
			$contents = preg_replace('/^jsonFlickrFeed\(|\)$/', '', $contents);
			$contents = str_replace("\'", "'", $contents);
			$json = json_decode($contents);

			// Loop through the items
			for ($i=0; $i < 5; $i++) { 
				
				// Start creating the HTML
				$html = "<li>";
				$html .= "<a href='" . $json->items[$i]->link . "'>";
				$html .= "<img src='" . $json->items[$i]->media->m . "' width='178' />";
				$html .= "</a>";
				$html .= "</li>";
				
				// Put it into the page
				echo $html;
				
			}
		
		?>
		
		<div style="clear: left;"></div>
		
	</ul>
	
	
	
</div>