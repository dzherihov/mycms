(function($) {
	"use strict";

	$('.small-carousel').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	responsive:{
		0:{
			items:1
		},
		320:{
			items:1
		},
		400:{
			items:1
		},
		768:{
			items:2
		},
		1024:{
			items:2
		},
		1200:{
			items:3
		}
	}
})



// sideNav - Start --------------------------------------------------
$(".button-collapse").sideNav();
// sideNav - End --------------------------------------------------




// main-searchbox - Start --------------------------------------------------
$( ".search-trigger" ).on("click", function() {
  $('#myNav').css( "height", "100%" );
});
$( ".closebtn" ).on("click", function() {
  $('#myNav').css( "height", "0%" );
});
// main-searchbox - End --------------------------------------------------



// sidebar testimonial --------------------------------------------------
$('.carousel.carousel-slider').carousel({fullWidth: true});


// main top slider --------------------------------------------------
$(document).ready(function(){
	$('.slider').slider();
});




// -----------------------------------------------------------------
// --- 1 --- back to top
// -----------------------------------------------------------------
$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.backToTop:hidden').stop(true, true).fadeIn();
		} else {
			$('.backToTop').stop(true, true).fadeOut();
		}
	});
	$(function() {
		$(".scroll").click(function() {
			$("html,body").animate({
				scrollTop: $(".thetop").offset().top
			}, "slow");
			return false
		})
	})

});

})(jQuery);

let pipWindow;

pipButton.addEventListener("click", function() {
  video.requestPictureInPicture().catch(error => {
    // Video failed to enter Picture-in-Picture mode.
  });
});

video.addEventListener("enterpictureinpicture", function(event) {
  // Video entered Picture-in-Picture mode.
  pipWindow = event.pictureInPictureWindow;
  updateVideoSize(pipWindow.width, pipWindow.height);
  pipWindow.addEventListener("resize", onPipWindowResize);
});

video.addEventListener("leavepictureinpicture", function() {
  // Video left Picture-in-Picture mode.
  pipWindow.removeEventListener("resize", onPipWindowResize);
});

function onPipWindowResize(event) {
  // Picture-in-Picture window has been resized.
  updateVideoSize(event.target.width, event.target.height);
}

function updateVideoSize(width, height) {
  // TODO: Update video size based on pip window width and height.
}
