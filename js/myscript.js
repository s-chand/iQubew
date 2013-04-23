// JavaScript Document
function effectFadeIn(selector) {
	$(selector).fadeOut(800).fadeIn(800, effectFadeOut(selector))
}

function effectFadeOut(selector) {
	$(selector).fadeIn(800).fadeOut(800, effectFadeIn(selector))
}

$(document).ready(function() {
	//code for the slide show
		$('#slideshow').cycle({
        fx:     'fade',
        speed:  'slow',
        timeout: 5000,
        pager:  '#slider_nav',
        pagerAnchorBuilder: function(idx, slide) {
            // return sel string for existing anchor
            return '#slider_nav li:eq(' + (idx) + ') a';
        }
    });
	
	//function to blink text (recursion)
//	effectFadeIn('#reg_left');
});

