$( document ).ready(function() {

	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

	AOS.init({
		duration: 1000,
		easing: 'ease-out'
	});

	$(window).bind('scroll',function(e){
        var scrolled = $(window).scrollTop();
        var seventies = $( ".seventies" ).first().offset().top - scrolled;
        var eighties = $( ".eighties" ).first().offset().top - scrolled;
        var nineties = $( ".nineties" ).first().offset().top - scrolled;
        var present = $( ".present" ).first().offset().top - scrolled;

        if (seventies < 246) {
        	$('.years div').removeClass('active');
        	$('.years div').eq(0).addClass('active');
        }
        if (eighties < 246) {
        	$('.years div').removeClass('active');
        	$('.years div').eq(1).addClass('active');
        }
        if (nineties < 246) {
        	$('.years div').removeClass('active');
        	$('.years div').eq(2).addClass('active');
        }
        if (present < 246) {
        	$('.years div').removeClass('active');
        	$('.years div').eq(3).addClass('active');
        }
        
    });

});