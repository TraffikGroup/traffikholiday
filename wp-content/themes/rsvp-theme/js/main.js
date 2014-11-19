$(document).ready(function(){

	var winHeight = $(window).height();

	function contentResize(){
		winHeight = $(window).height();

		$("#content").css({"height" : winHeight});
	}

	contentResize();

	$(window).resize(function(){
		contentResize();
	});

	$('body').flowtype({
		minimum   : 500,
		maximum   : 1200,
		minFont   : 20,
		maxFont   : 40,
		fontRatio : 50,
		lineRatio : 1.45
	});
	
	$(".video .yes, .yes-mobile").click(function(){
		$(this).parent().fadeOut(function(){
			$(".left").addClass("grow");
			$(".left .wpcf7").delay(500).animate({"opacity" : 1}, 250);
		});
	});

	$(".video .no, .no-mobile").click(function(){
		$(this).parent().fadeOut(function(){
			$(".right").addClass("grow");
			$(".right .inner").delay(500).animate({"opacity" : 1}, 250);
		});
	});

	$(".close").click(function(){

		var errorVisible = $('.wpcf7-validation-errors').is(':visible');

		if(errorVisible){
			
			$('.wpcf7-validation-errors').fadeOut();

		}else{
			
			$(".left .wpcf7").animate({"opacity" : 0}, 250, function(){
				$(".left").removeClass("grow");
			});
			$(".right .inner").animate({"opacity" : 0}, 250, function(){
				$(".right").removeClass("grow");
			});
			
			$(".video").delay(500).fadeIn();
		
		}
		

		
	});


});