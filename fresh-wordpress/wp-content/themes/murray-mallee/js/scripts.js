$(document).ready(function (){



/*//Sticky nav
$('#intro-para').waypoint(function (direction) {
        if (direction == "down"){
            $('.nav-bar').addClass('sticky-nav');

        }
	
        else {
				
            $('.nav-bar').removeClass('sticky-nav');
		
			
        }
    }, 
    {
  offset: '60px;'
    });
	*/

//Home page scroll animations
	
/*$('#intro-para').waypoint(function(direction) {
	
	if (direction == "down"){
			
            $('#intro-para').removeClass('hidden').fadeIn(400);
			console.log('function');
			
        }
	
    },
    {
  offset: '25px;'
    });*/
	




/* Mobile Navigation */

      
    $('i.mobile-nav').click(function(){
        var nav = $('#nav');
        var icon = $(this);
    
        nav.slideToggle(200);
        if (icon.hasClass('ion-navicon-round')){
            icon.removeClass('ion-navicon-round');
			icon.addClass('ion-close-round');
            
        }
        else {
            icon.removeClass('ion-close-round');
            icon.addClass('ion-navicon-round');
        };
    });
	

	//Responsive nav
	
		$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

		if(win.width() > 400){

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});

    
	
});

