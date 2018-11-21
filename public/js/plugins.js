// Avoid `console` errors in browsers that lack a console.

(function() {

    var method;

    var noop = function () {};

    var methods = [

        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',

        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',

        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',

        'timeStamp', 'trace', 'warn'

    ];

    var length = methods.length;

    var console = (window.console = window.console || {});



    while (length--) {

        method = methods[length];



        // Only stub undefined methods.

        if (!console[method]) {

            console[method] = noop;

        }

    }

}());



// placeHolderFallBack

function placeHolderFallBack() {

    if("placeholder" in   document.createElement("input")) {

        return;

    } else {

        $('[placeholder]').focus(function () {

        var input = $(this);

        if (input.val() == input.attr('placeholder')) {

            input.val('');

            input.removeClass('placeholder');

        }

        }).blur(function () {

            var input = $(this);



            if (input.val() == '' || input.val() == input.attr('placeholder')) {

            input.addClass('placeholder');

            input.val(input.attr('placeholder'));

        }

        }).blur();

        $('[placeholder]').parents('form').submit(function() {

            $(this).find('[placeholder]').each(function() {

                var input = $(this);

                if(input.val() == input.attr('placeholder')) {

                    input.val('');

                }

            })

        });

    }

}

$(window).load(function() {

	$('body, #wrapper, .footer-wrapper').css({opacity:1});	

});

$(window).load(function() {

    $(window).resize(function(){

    });

});



jQuery(document).ready(function($){
	
	// browser window scroll (in pixels) after which the "back to top" link is shown

	var offset = 300,

		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced

		offset_opacity = 1200,

		//duration of the top scrolling animation (in ms)

		scroll_top_duration = 700,

		//grab the "back to top" link

		$back_to_top = $('.cd-top');



	//hide or show the "back to top" link

	$(window).scroll(function(){

		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');

		if( $(this).scrollTop() > offset_opacity ) { 

			$back_to_top.addClass('cd-fade-out');

		}
		if ($(this).scrollTop() > 1){  
        //$('.header').addClass("sticky");
		//$('.banner-holder').addClass("sticky");
    }
    else{
        //$('.header').removeClass("sticky");
		//$('.banner-holder').addClass("sticky");
    }

	});

	//smooth scroll to top

	$back_to_top.on('click', function(event){

		event.preventDefault();

		$('body,html').animate({

			scrollTop: 0 ,

		 	}, scroll_top_duration

		);

	});
});//(document).ready function-END
