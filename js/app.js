// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();
$(document).ready(function() {
  if($(".fullPage").length) {
   	$.fn.fullpage({
    	navigation: false,
    	navigationPosition: 'left',
    	css3: true,
    	anchors: ['bobby','work','resume','contact']
  	});
  }
}); 
  
$(".off-canvas-wrap").on("click", ".off-canvas-list li a", function(e){
  $(".off-canvas-wrap").removeClass("move-left");
});
