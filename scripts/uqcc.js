$(function(){

	// If the events module is on the page
	if($(".events").length > 0) {

		// Create the spinner
		var opts = { lines: 12, length: 7, width: 4, radius: 10, color: '#00204F', speed: 1, trail: 60, shadow: false };
		var spinner = new Spinner(opts).spin($(".events .loading")[0]);
	
		// Get today's date
		var date = new Date();
		var today = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
	
		// Get the calendar data
		$.get("./wp-content/themes/lucia/server/calendar.php?url=https%3A%2F%2Fwww.googleapis.com%2Fcalendar%2Fv3%2Fcalendars%2Frabts4o5f0hl2aema0sqsuot78%40group.calendar.google.com%2Fevents%3FmaxResults%3D10%26timeMin%3D2011-12-11T01%3A00%3A00.000Z%26pp%3D1%26key%3DAIzaSyAQowsWAInPNbY5sMQ9HrWzIBlyeF7pRtI%26orderBy%3DstartTime%26singleEvents%3Dtrue", function(data){
		
			// Hide the spinner
			$(".events .loading").hide();
			
			// Prettier months
			var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
			
			// Loop through the events
			for (var i=0; i < data.items.length; i++) {
				
				// Process the date
				var time = true;
				var eventDate;
				if (data.items[i].start.dateTime == undefined) {
					time = false;
					eventDate = new Date(data.items[i].start.date + "T07:00:00+10:00");
				} else {
					eventDate = new Date(data.items[i].start.dateTime);
				}
				
				// Create the HTML
				var html = "<tr>";
				html += "<td class='summary'><span class='name'>" + data.items[i].summary + "</span>";
				if (data.items[i].location != undefined) {
					html += "<span class='location'>" + data.items[i].location + "</span>";
				}
				html += "</td>";
				html += "<td class='date'><span class='day'>" + eventDate.format("jS M") + "</span>";
				if (time) {
					html += "<span class='time'>" + eventDate.format("g:iA") + "</span></td>";
				}
				html += "</tr>";
				
				// Add it to the table
				$(".events table").append(html);
				
			};
		
			console.log(data);
		}, "json");
		
	};
	
});