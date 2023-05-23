$(document).ready(function () {
	// preload images

	$("#image_list a").each(function () {
		var swappedImage = new Image();
		swappedImage.src = $(this).attr("href");

	});

	// set up event handlers for links    
	$("#image_list a").click(function (evt) {
		
		//When I click image in the list I fade out picture and caption
		//then I fade ın new picture and caption
		var imageURL = $(this).attr("href");
		$('#image').fadeOut(1000,function(){
			$("#image").attr("src", imageURL).fadeIn(1000);
		
		});
		
		var caption = $(this).attr("title");
		$('#caption').fadeOut(1000,function(){
			$("#caption").text(caption).fadeIn(1000);

		})

		// cancel the default action of the link
		evt.preventDefault();
	}); // end click


	// move focus to first thumbnail
	$("li:first-child a").focus();
}); // end ready
