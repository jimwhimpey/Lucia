$(function(){

	$(".flickr ul li:last-of-type").css("margin", "0");
	
	// Handle quoting 
	$(".quotes_link").click(function(){
	
		// Get the HTML body of what we want to quote
		var quoteContent = $(this).parents(".bbp-reply-header").next(".type-reply").find(".bbp-reply-content").html().trim();
		quoteContent = "<blockquote>" + quoteContent + "</blockquote>\n\n";
		
		// Put it into the text area surrounded by block quotes, make it bigger and put the cursor in there
		$("textarea").css("height", "400px").focus().val(quoteContent);

		
		$('html, body').animate({
			scrollTop: $("#new-post").offset().top
		}, 1000);
		
		return false;
	
	});

});