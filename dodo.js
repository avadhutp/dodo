(function ($) {
		$(document).ready(function() {
			//Get the latest tweet
			$("#tfcContainer").text("Fetching latest tweet...");
			$.getJSON("http://api.twitter.com/statuses/user_timeline/avadhutp.json?callback=?",function(tweet) {
				$("#tfcContainer").html(tweet[0].text);	
			});
			//Apply typekit
			try{Typekit.load();}catch(e){}
		})
}(jQuery));