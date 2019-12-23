/*jslint browser: true*/
/*global $, jQuery, alert*/
$.noConflict();
$(document).ready(function () {

    // trigger navbar close 
    $(".toggle-nav i").click(function () {
        $(".navbar .navbar-links").toggleClass("opened-nav");
    });

    // trigger navbar close 
    $(".navbar-open i").click(function () {
        $(".navbar .navbar-links").addClass("opened-nav");
    });

    //Close navbar when click in anywhere in document
    $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar .navbar-links").hasClass("opened-nav");
        if (_opened === true && !clickover.hasClass("fa-bars")) {
            $(".toggle-nav i").click();
            console.log("true");
        }
    });

    // Trgger Login Form Toggle  

    $(".btn-toggle-register").click(function () {
        $(".login-form").slideUp();
        $(".register-form").slideDown();
    });
     $(".btn-toggle-login").click(function () {
         $(".login-form").slideDown();
        $(".register-form").slideUp();
    });


    // Home Page Slider Banner
    $('.home-page-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        touchDrag: false,
        mouseDrag: false,
        autoplay: true,
        "animateOut": "fadeOut",
        responsive: {
            0: {
                items: 1
            }
        }
    });

    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
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
                    }, 1000, function () {
                        // Callback after animation

                    });
                }
            }
        });




});

jQuery(document).ready(function () {
    jQuery("select").selectmenu();
})
