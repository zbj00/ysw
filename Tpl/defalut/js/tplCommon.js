$(window).load(function(){
	$('#sidebarTitle').mouseover(function(){
		$("#sidebar").css({'width':'400px'});
	});
	$('#sidebar').mouseleave(function(){
		$("#sidebar").css({'width':'20px'});
	});

});