$( document ).ready(function() {

	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

	AOS.init({
		duration: 200,
		easing: 'ease-out'
	});

    var eraArray = ['.seventies','.eighties','.nineties','.aughts'];

    $('.years div').click(function(e){
        //$('.years div').removeClass('active');
        //$(this).addClass('active');

        $('html, body').animate({
            scrollTop: $(eraArray[$(this).index()] ).first().offset().top - 220
        });
        
        /*switch($(this).index()){
            case 0:
                $('html, body').animate({
                    scrollTop: $( ".seventies" ).first().offset().top - 250
                })
            break;
            case 1:
                $('html, body').animate({
                    scrollTop: $( ".eighties" ).first().offset().top - 250
                })
            break;
            case 2:
                $('html, body').animate({
                    scrollTop: $( ".seventies" ).first().offset().top - 250
                })
            break;
            case 3:
                $('html, body').animate({
                    scrollTop: $( ".seventies" ).first().offset().top - 250
                })
            break;
        }*/

    });

	$(window).bind('scroll',function(e){
        var scrolled = $(window).scrollTop();
        var seventies = $( ".seventies" ).first().offset().top - scrolled;
        var eighties = $( ".eighties" ).first().offset().top - scrolled;
        var nineties = $( ".nineties" ).first().offset().top - scrolled;
        var aughts = $( ".aughts" ).first().offset().top - scrolled;

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
        if (aughts < 246) {
        	$('.years div').removeClass('active');
        	$('.years div').eq(3).addClass('active');
        }
        
    });

    $('.news .carousel').slick({
        arrows: true,
        autoplay: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        cssEase: "ease",
        autoplaySpeed: 1000,
        pauseOnFocus: false,
        responsive: [
            {
              breakpoint: 900,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });

});