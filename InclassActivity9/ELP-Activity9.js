$(document).ready(function () {
	// preload images

	$("#image_list a").each(function () {
		var swappedImage = new Image();
		swappedImage.src = $(this).attr("href");

	});





	// set up event handlers for links    
	$("#image_list a").click(function (evt) {
		
		$("#image").fadeOut();
		$("#caption").fadeOut();

		var imageURL = $(this).attr("href");
		$("#image").attr("src", imageURL).fadeIn();

		var caption = $(this).attr("title");
		$("#caption").text(caption).fadeIn();



		// cancel the default action of the link
		evt.preventDefault();
	}); // end click


	// move focus to first thumbnail
	$("li:first-child a").focus();
}); // end ready
