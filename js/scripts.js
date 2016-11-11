
function addOnScroll() {
        //this is an event handler for the window object
        $(window).scroll(function(){
            console.log('hi')
            //EVERYTHING in here runs as soon as a scroll is detected
            // 1. this variable stores the distance from the top of the window
            var scrollDistance = $(window).scrollTop(); //returns a value equal to the distance from the top
            var portfolioTop = $('.portfolio').offset().top;
            // 2. this variable stores the height of a certain document
            var divHeight = $('.hero').height();
            // 3. this variable stores the height of the nav bar
            var navHeight = $('.top_bar').height();
            // 4. When the scroll distance is greater than the document - navbar...
            var divNinety = divHeight*.99;
            console.log(scrollDistance)
            if(scrollDistance >= portfolioTop) {
                $('.top_bar').addClass('top_bar_scroll');
            }
            else if(scrollDistance > divNinety && scrollDistance < portfolioTop) {
                $('.top_bar').addClass('top_bar_opaque');
            }
            else if(scrollDistance < portfolioTop) {
                $('.top_bar').removeClass('top_bar_scroll top_bar_opaque');
            }

        })
    }

$(function() { 

    addOnScroll();

	$('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });


    $('.portfolio_items').css({
    	'opacity': '0',
    }); //want them to be invisible to begin with, otherwise they will already be there

//fade the portfolio section in on scroll
	$(window).on('scroll', function(){
		var headerHeight = $('.hero').height();
		if ($(this).scrollTop() > (headerHeight - 50)) { //if the number we've moves from the top of the screen is greater than the height of the header, do this
			$('.portfolio_items').css({
				'opacity': '1',
			}); //when it reaches the height, fade the items in
		} 
	});

});

