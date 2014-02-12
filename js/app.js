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
$(".inner-wrap").on("click", ".arrow.up .panel", function(){
  $.fn.fullpage.moveSectionUp();
});
$(".inner-wrap").on("click", ".arrow.down .panel, .scroll .panel", function(){
  $.fn.fullpage.moveSectionDown();
});
$('.tabs').on('toggled', function (event, tab) {
  $("body, html").animate({
    scrollTop: $("#tabsContent").offset().top - 100
  }, 1000);
  $(".content.active").effect("highlight", {}, 1500);
});