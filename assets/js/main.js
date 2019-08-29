

(function($) {

	// Breakpoints.
		skel.breakpoints({
			xlarge:	'(max-width: 1680px)',
			large:	'(max-width: 1280px)',
			medium:	'(max-width: 980px)',
			small:	'(max-width: 736px)',
			xsmall:	'(max-width: 480px)'
		});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

	// Off-Canvas Navigation.

		// Navigation Panel.
			$(
				'<div id="navPanel">' +
					$('#nav').html() +
					'<a href="#navPanel" class="close"></a>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left'
				});

		// Fix: Remove transitions on WP<10 (poor/buggy performance).
			if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
				$('#navPanel')
					.css('transition', 'none');

	});

})(jQuery);


//$(document).ready(function(){
	
/*
	$("#img1").hover(function(){
		$(this).attr("src","images/1-b-1.png");
		$(this).mouseout(function(){
			$(this).attr("src","images/1-1.png");
		});
	});

	$("#img2").hover(function(){
		$(this).attr("src","images/2-b.png");
		$(this).mouseout(function(){
			$(this).attr("src","images/2.png");
		});
	});
	$("#img3").hover(function(){
		$(this).attr("src","images/3-b.png");
		$(this).mouseout(function(){
			$(this).attr("src","images/3.png");
		});
	});
	$("#img4").hover(function(){
		$(this).attr("src","images/4-b.png");
		$(this).mouseout(function(){
			$(this).attr("src","images/4.png");
		});
	});
	$("#img5").hover(function(){
		$(this).attr("src","images/5-b.png");
		$(this).mouseout(function(){
			$(this).attr("src","images/5.png");
		});
	});
	$("#img6").hover(function(){
		$(this).attr("src","images/6-b.png");
		$(this).mouseout(function(){
			$(this).attr("src","images/6.png");
		});
	});
	$("#img7").hover(function(){
		$(this).attr("src","images/7-b.png");
		$(this).mouseout(function(){
			$(this).attr("src","images/7.png");
		});
	});


});
	*/





 $(function(){
    $(".flip").flip({
        trigger: 'hover'
    });
});





	// body...