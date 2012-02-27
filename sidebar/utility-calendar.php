<?php
	
	// Some extremely basic caching for two hours
	if (file_exists('/web/cache/utility-calendar.html') && time() - filemtime('/web/cache/utility-calendar.html') < (60*60*2)) {
 
	  // the output is already cached, so just
	  // dump the file's contents to the browser
	  readfile('/web/cache/utility-calendar.html');
 
	} else {
 
		// Otherwise, the cache doesn't exist yet or is old
    ob_start();
 
?>
				
		<div class="col-b events">
			<h2>Upcoming Events</h2>
			<table>
		
				<?php
	
					// Set the timezone
					date_default_timezone_set("Australia/Brisbane");
	
					// Get the Calendar data from Google
					$timeNow = date("Y-m-d\T01:00:00.000\Z", time());
					$contents = file_get_contents("https://www.googleapis.com/calendar/v3/calendars/rabts4o5f0hl2aema0sqsuot78@group.calendar.google.com/events?maxResults=10&timeMin=" . $timeNow . "&pp=1&key=AIzaSyAQowsWAInPNbY5sMQ9HrWzIBlyeF7pRtI&orderBy=startTime&singleEvents=true");
					$json = json_decode($contents);
		
					// Loop through the results
					foreach ($json->items as $item) {
			
						// Process the date
						if (empty($item->start->dateTime)) {
							$time = false;
							$eventDate = strtotime($item->start->date);
						} else {
							$time = true;
							$eventDate = strtotime($item->start->dateTime);
						}
			
						// Create the table rows
						$row = "<tr>";
						$row .= "<td class='summary'><span class='name'>" . $item->summary . "</span>";
						if (!empty($item->location)) {
							$row .= "<span class='location'>" . $item->location . "</span>";
						}
						$row .= "</td>";
						$row .= "<td class='date'><span class='day'>" . date("jS M", $eventDate) . "</span>";
						if ($time) {
							$row .= "<span class='time'>" . date("g:iA", $eventDate) . "</span></td>";
						}
						$row .= "</tr>";
			
						// Output the row
						echo $row;
			
					}
	
				?>
		
			</table>
			<p class="more"><a href="<?php bloginfo('url'); ?>/riding-racing/calendar/">See the full calendar &rarr;</a></p>
		</div>
								
<?php 

	  // now, write the output you captured in the buffer
	  // into the cache file
	  $fp = fopen('/web/cache/utility-calendar.html', 'w');
	  fwrite($fp, ob_get_contents());
	  fclose($fp);
 
	  // and output the buffer's contents to the
	  // browser as well
	  ob_end_flush();
		
	}

?>