<?php

	// Takes URL, gets the result and returns it
	$contents = file_get_contents(urldecode($_GET["url"]));
	echo $contents;

?>