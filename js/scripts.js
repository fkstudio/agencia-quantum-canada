$(function(){
	var container = $("#container");
	var win = $(window);

	if(container.height() < win.height()){
	    container.height(win.height());
	}

	win.resize(function(){
		//container.height(win.height());
	})

	$('.my-background-video').bgVideo({fullScreen: true, showPausePlay: false});

	var video = document.getElementById('video');

	if(video == null){
		$("#loading").fadeOut(1000);
		   $(".fade-out").animate({'opacity': 1}, 1000);
	}
	else{
		video.addEventListener('loadeddata', function() {
			video.play();
			
		   // Video is loaded and can be played
		   $("#loading").fadeOut(1000);
		   $(".fade-out").animate({'opacity': 1}, 1000);
		}, false);
	}

})