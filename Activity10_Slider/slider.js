$(document).ready(function () {
	require(['jquery', 'jquery/ui', 'NameSpace_Module/web/js/your_module'], function ($, bxSlider) {
		$("#slider").bxSlider({
			auto: true,
			slideWidth: 250,
			slideMargin: 10,
			randomStart: true,
			speed: 300,
			moveSlides: 1,
			pager: true,
			pagerType: "short",
			touchEnabled: false
		});
	})
});


