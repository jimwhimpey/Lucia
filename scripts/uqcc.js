$(function(){

	$(".flickr ul li:last-of-type").css("margin", "0");
	
	// Handle quoting 
	$(".quotes_link").click(function(){
	
		// Get the HTML body of what we want to quote
		var author = $(this).parents(".bbp-reply-header").next(".type-reply, .type-topic").find(".bbp-author-name").text();
		var quoteContent = $(this).parents(".bbp-reply-header").next(".type-reply, .type-topic").find(".bbp-reply-content").html().trim();
		// Filter out the empty pars
		quoteContent = quoteContent.replace(/<p><\/p>|\n/gi, "");
		// Put it all together
		quoteContent = "<cite>" + author + " said:</cite>\n<blockquote>" + quoteContent + "</blockquote>\n\n";
		
		// Put it into the text area surrounded by block quotes, make it bigger and put the cursor in there
		$("textarea").css("height", "400px").focus().val(quoteContent).scrollTop(99999);

		// Scroll down to the reply field
		$('html, body').animate({
			scrollTop: $("#new-post").offset().top
		}, 1000);
		
		return false;
	
	});

});