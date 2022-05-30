;(function ($, window, document, undefined) {
    var $win = $(window);
    var $doc = $(document);
    var $body = $('body');
    "use strict";
    $(function() {

        //Your code here
    });
        $doc.ready(function () {

        $win.scroll(function(){
            var sticky = $('.header'),
                scroll = $win.scrollTop();

            if (scroll >= 200) sticky.addClass('sticky');
            else sticky.removeClass('sticky');
        });

        // $body.on('click','.navbar-nav a',function(e){
        //     e.preventDefault();
        //     $('html, body').animate({
        //         scrollTop: $("#myDiv").offset().top
        //     }, 2000);
        // });

            // smmoth scro0ll
            // Select all links with hashes
            $('a[href*="#"]')
            // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function(event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000, function() {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });
            // smmoth scro0ll end


            // ===== Scroll to Top ====
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                    $('#return-to-top').fadeIn(200);    // Fade in the arrow
                } else {
                    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                }
            });
            $('#return-to-top').click(function() {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop : 0                       // Scroll to top of body
                }, 1000);
            });




            // Pricing Slider
        $(".pricing-slider").slick({
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        arrows: true,
                        dots: true,
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        dots: true,
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true,
                        dots: true,
                        slidesToShow: 1
                    }
                }
            ]
        });
        $(".chosen-select").chosen({

            'placeholder':'Please choose something ...',
            'display_selected_options':false
        });




            $doc.mouseup(function(e)
            {
                var container = jQuery(".niceCountryInputMenuDropdownContent,.niceCountryInputMenuFilter");
                if (!container.is(e.target) && container.has(e.target).length === 0)
                {
                    container.hide();
                }
            });

            $(".niceCountryInputSelector").each(function(){
            new NiceCountryInput($(this)).init();
            });


            $('.footer-menu').find('li').addClass('list-inline-item');


    });
})(jQuery, window, document);
