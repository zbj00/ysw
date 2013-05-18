$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true
  });
  
  
  $(".slide").click(function(e){
	var wd = $(this).attr("data-wd");
	location.href = "index.php?s=vod-search-wd-" + wd;
  });
  
});