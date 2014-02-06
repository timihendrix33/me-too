// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();
$(document).ready(function() {
	$.fn.fullpage({
  	navigation: false,
  	navigationPosition: 'left',
  	anchors: ['bobby','work','resume','contact'],
	});
});