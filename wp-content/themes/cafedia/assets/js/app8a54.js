var PIXELSIGNS = PIXELSIGNS || {};

(function($){

    /*!----------------------------------------------
        # This beautiful code written with heart
        # by Mominul Islam <hello@mominul.me>
        # In Dhaka, BD at the PixelSigns workstation.
        ---------------------------------------------*/

    // USE STRICT
    "use strict";

    PIXELSIGNS.initialize = {

        init: function(){
            PIXELSIGNS.initialize.general();
            PIXELSIGNS.initialize.foodMenuFilter();
            PIXELSIGNS.initialize.mobileMenu();
            PIXELSIGNS.initialize.gallery();
            PIXELSIGNS.initialize.tab();
            PIXELSIGNS.initialize.sectionBackground();
            PIXELSIGNS.initialize.sectionSwitch();
            PIXELSIGNS.initialize.googleMap();
            PIXELSIGNS.initialize.contactFrom();          
            PIXELSIGNS.initialize.particlesBg();          
        },

        /*========================================================*/
        /*=           Collection of snippet and tweaks           =*/
        /*========================================================*/

        general: function() {
            //Popup Search
            $('#search-menu-wrapper').removeClass('toggled');

            $('#search-icon').on('click', function(e) {
                e.stopPropagation();
                $('#search-menu-wrapper').toggleClass('toggled');
                $("#popup-search").focus();
            });

            $('#search-menu-wrapper input').on('click', function(e) {
                e.stopPropagation();
            });

            $('#search-menu-wrapper, body').on('click', function() {
                $('#search-menu-wrapper').removeClass('toggled');
            });

            /* Swiper Slider Init */
            $('.swiper-container').each(function() {
                new SwiperRunner($(this));
            });  

            /* Bootstrap Accordion  */
            $('.faq .card').each(function () {
                var $this = $(this);
                $this.on('click', function (e) {
                    var has = $this.hasClass('active');
                    $('.faq .card').removeClass('active');
                    if(has) {
                        $this.removeClass('active');
                    } else {
                        $this.addClass('active');
                    }
                });
            });

            $('#datepicker').datepicker({
                language: 'en',
                minDate: new Date()
            })

            /* Magnefic Popup */
            $('.popup-modal').each(function() {
                $('.popup-modal').magnificPopup({
                    type: 'image',
                    mainClass: 'mfp-with-zoom',
                    gallery: {
                        enabled: true
                    }

                });
            });
            

            $('.ps_vertical_parallax').each(function () {            
                var parallax_speed = $(this).data('parallax-speed');

                $('.ps_vertical_parallax').parallax('50%', parallax_speed);  
            }); 

            if(window < 600) {
                $('#wpadminbar').addClass('admin-position');
            }    

            $('#wpadminbar').addClass('admin-position');
        },

        /*=================================*/
        /*=           Food Menu           =*/
        /*=================================*/
        foodMenuFilter: function() {
            /* Filter Food Menu */
            var selectedClass = "";
            $(".menu-filter li").on('click', function(){
                selectedClass = $(this).attr("data-rel");
                $("#filter-content").fadeTo(100, 0.1);
                $("#filter-content .item").not("."+selectedClass).fadeOut();
                setTimeout(function() {
                    $("."+selectedClass).fadeIn();
                    $("#filter-content").fadeTo(400, 1);
                }, 400);

            });

            /* Food Menu Filter active*/
            $('.menu-filter li').on('click', function() {
                $('.menu-filter ').find('.current').removeClass('current');
                $(this).addClass('current');
                return false;
            });
        },

        /*==========================================*/
        /*=           Section Background           =*/
        /*==========================================*/
        particlesBg: function() {
            $('.particles-js').each(function () {

                var id = $(this).attr('id');
                var type = $(this).data('particles-type');
                var color_type = $(this).data('particles-colors-type');
                var color = $(this).data('particles-color');
                var color_line = $(this).data('particles-color-line');
                var number = $(this).data('particles-number');
                var lines = $(this).data('particles-line');
                var size = $(this).data('particles-size');
                var speed = $(this).data('particles-speed');
                var hover = $(this).data('particles-hover');
                var hover_mode = $(this).data('particles-hover-mode');
                switch (type) {
                    case 'particles':
                    type = 'circle';
                    break;
                    case 'hexagons':
                    type = 'polygon';
                    break;
                    case 'triangle':
                    type = 'triangle';
                    break;
                    case 'star':
                    type = 'star';
                    break;
                    default:
                    type = 'circle';
                    break;
                }
                if (color_type == 'random_colors') {
                    color = color.split(',');
                    color_line = color[0]
                }

                particlesJS(
                    id, {
                        "particles":{
                            "number":{
                                "value":number,
                                "density":{
                                    "enable":true,
                                    "value_area":800
                                }
                            },
                            "color":{
                                "value": color
                            },
                            "shape":{
                                "type":type,
                                "polygon":{
                                    "nb_sides":6
                                },
                            },
                            "opacity":{
                                "value":1,
                                "random":true,
                                "anim":{
                                    "enable":false,
                                    "speed":1,
                                    "opacity_min":0.1,
                                    "sync":false
                                }
                            },
                            "size":{
                                "value":size,
                                "random":true,
                                "anim":{
                                    "enable":false,
                                    "speed":30,
                                    "size_min": 1,
                                    "sync":false
                                }
                            },
                            "line_linked":{
                                "enable":lines,
                                "distance":150,
                                "color":color_line,
                                "opacity":0.4,
                                "width":1
                            },
                            "move":{
                                "enable":true,
                                "speed":speed,
                                "direction":"none",
                                "random":false,
                                "straight":false,
                                "out_mode":"out",
                                "bounce":false,
                                "attract":{
                                    "enable":false,
                                    "rotateX":600,
                                    "rotateY":1200
                                }
                            }
                        },
                        "interactivity":{
                            "detect_on":"canvas",
                            "events":{
                                "onhover":{
                                    "enable":hover,
                                    "mode":hover_mode
                                },
                                "onclick":{
                                    "enable":true,
                                    "mode":"push"
                                },
                                "resize":true
                            },
                            "modes":{
                                "grab":{
                                    "distance":150,
                                    "line_linked":{
                                        "opacity":1
                                    }
                                },
                                "bubble":{
                                    "distance":200,
                                    "size":size*1.6,
                                    "duration":20,
                                    "opacity":1,
                                    "speed":30
                                },
                                "repulse":{
                                    "distance":80,
                                    "duration":0.4
                                },
                                "push":{"particles_nb":4},
                                "remove":{"particles_nb":2}
                            }
                        },
                        "retina_detect":true
                    });
                var update;
                update = function() {
                    requestAnimationFrame(update); 
                }; 
                requestAnimationFrame(update);
            })
        },

        /*==================================*/
        /*=           Mobile Menu          =*/
        /*==================================*/

        mobileMenu: function() {

            var windowSize = $( window ).width();

            if (windowSize < 991) {

                $('.site-main-menu li.active').addClass('open').children('ul').show();
                $('.site-main-menu li.menu-item-has-children>a').on('click', function(){
                    $(this).removeAttr('href');
                    var element = $(this).parent('li');
                    if (element.hasClass('open')) {
                        element.removeClass('open');
                        element.find('li').removeClass('open');
                        element.find('ul').slideUp(400);
                    }
                    else {
                        element.addClass('open');
                        element.children('ul').slideDown(400);
                        element.siblings('li').children('ul').slideUp(400);
                        element.siblings('li').removeClass('open');
                        element.siblings('li').find('li').removeClass('open');
                        element.siblings('li').find('ul').slideUp(400);
                    }
                });
            }


            $( '.toggle-menu' ).on( 'click', function (e) {
                e.preventDefault();
                var mask = '<div class="mask-overlay">';

                $( 'body' ).toggleClass( 'open-menu' );
                $(mask).hide().appendTo( 'body' ).fadeIn( 'fast' );
                $( '.mask-overlay, .close-menu' ).on( 'click', function() {
                    $( 'body' ).removeClass( 'open-menu' );
                    $( '.mask-overlay' ).remove();
                });
            });



            let mainheader = $('.gp-header-sticky'),
            height = mainheader.outerHeight(),
            scroll = $(document).scrollTop();
            $(window).on('load', function () {
                if ($(document).scrollTop() > height) {
                    if (mainheader.hasClass('gp-header-fixed')) {
                        mainheader.removeClass('gp-header-fixed');
                    } else {
                        mainheader.addClass('gp-header-fixed');
                    }
                }
            })
            $(window).on('scroll', function () {
                let scrolled = $(document).scrollTop(),
                header = $('.gp-header-fixed');
                if (scrolled > scroll) {
                    header.removeClass('sticky');
                } else {
                    header.addClass('sticky');
                }
                if (scrolled === 0) {
                    mainheader.removeClass('gp-header-fixed');
                    header.removeClass('sticky');
                } else {
                    mainheader.addClass('gp-header-fixed');
                }
                scroll = $(document).scrollTop();
            });
        },

        /*==========================================*/
        /*=           Section Background           =*/
        /*==========================================*/

        sectionBackground: function() {

            // Section Background Image
            $('[data-bg-image]').each(function() {
                var img = $(this).data('bg-image');
                $(this).css({
                    backgroundImage: 'url(' + img + ')',
                });
            });

            //Parallax Background
            $('[data-parallax="image"]').each(function() {

                var actualHeight = $(this).position().top;
                var speed      = $(this).data('parallax-speed');
                var reSize     = actualHeight - $(window).scrollTop();
                var makeParallax = -(reSize/2);
                var posValue   = makeParallax + "px";

                $(this).css({
                    backgroundPosition: '50% ' + posValue,
                });
            });
        },

        /*==========================*/
        /*=           Tab          =*/
        /*==========================*/

        tab: function() {
            $('.gp-tab ul.gp-tabs-nav').addClass('active').find('> li:eq(0)').addClass('current');

            $('.gp-tab ul.gp-tabs-nav li a').on('click',function (g) {
                var tab = $(this).closest('.gp-tab'),
                index = $(this).closest('li').index();

                tab.find('ul.gp-tabs-nav > li').removeClass('current');
                $(this).closest('li').addClass('current');

                tab.find('.tab_content').find('div.gp_tabs_item').not('div.gp_tabs_item:eq(' + index + ')').slideUp();
                tab.find('.tab_content').find('div.gp_tabs_item:eq(' + index + ')').slideDown();

                g.preventDefault();
            } );
        },

        /*==============================*/
        /*=           Gallery          =*/
        /*==============================*/

        gallery: function() {     

            if ((typeof $.fn.imagesLoaded !== 'undefined') && (typeof $.fn.isotope !== 'undefined')) {

                $(".cafedia-gallery-items").imagesLoaded( function() {

                    var container = $(".cafedia-gallery-items");

                    container.isotope({
                        itemSelector: '.cafedia-gallery-item',
                        percentPosition: true,
                        transitionDuration: '0.5s',
                        masonry: {
                            columnWidth: '.grid-sizer',
                            layoutMode : 'masonry',
                        }
                    });

                    $('.cafedia-isotope-filter li').on('click', function() {
                        $('.cafedia-isotope-filter').find('.current').removeClass('current');
                        $(this).addClass('current');

                        var selector = $(this).attr("data-filter");
                        container.isotope({
                            filter: selector
                        });

                        return false;
                    });

                    $(window).resize(function() {
                        container.isotope();
                        blogContainer.masonry();
                    });

                    $('.cafedia-gallery-items').scrollspy('refresh');

                });

                var blogContainer = $(".cafedia-masonry");

                blogContainer.masonry({
                    itemSelector: '.grid-item',
                    percentPosition: true
                });

            }
        },

        /*=========================================*/
        /*=           Section Background          =*/
        /*=========================================*/

        sectionSwitch: function() {
            $('[data-type="section-switch"], #menu-home li a, #banner-particales a, #banner-creative a, #banner-ripple a').on('click', function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    if (target.length > 0) {

                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        },

        /*=================================*/
        /*=           Google Map          =*/
        /*=================================*/
        googleMap: function() {
            $('.gmap3-area').each(function() {
                var $this  = $(this),
                key    = $this.data('key'),
                lat    = $this.data('lat'),
                lng    = $this.data('lng'),
                mrkr   = $this.data('mrkr');

                $this.gmap3({
                    center: [lat, lng],
                    zoom: 12,
                    scrollwheel: false,
                    mapTypeId : google.maps.MapTypeId.ROADMAP,
                    styles:  [{
                        "featureType": "all",
                        "elementType": "labels.text",
                        "stylers": [{
                            "color": "#627385"
                        },
                        {
                            "weight": "0.01"
                        }]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#8a0707"
                        }]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "color": "#781010"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#444444"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "color": "#861414"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "weight": "0.01"
                        },
                        {
                            "color": "#ff0000"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "weight": "0.01"
                        },
                        {
                            "color": "#470606"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#6d2929"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "color": "#6b2a2a"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "color": "#516376"
                        },
                        {
                            "saturation": "-14"
                        },
                        {
                            "weight": "0.01"
                        },
                        {
                            "lightness": "-11"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#516376"
                        },
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "weight": "0.01"
                        },
                        {
                            "color": "#650505"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "color": "#195ba0"
                        },
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#811313"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#ffffff"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "color": "#ff0000"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#ffffff"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "labels",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.government",
                        "elementType": "labels.text",
                        "stylers": [
                        {
                            "color": "#ad2323"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.government",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#760808"
                        }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#dfdfdf"
                        },
                        {
                            "weight": "0.01"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "simplified"
                        }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                        {
                            "color": "#46bcec"
                        },
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#c8d7d4"
                        }
                        ]
                    }]

                })

            .marker(function (map) {

                return {
                    position: map.getCenter(),
                    icon: mrkr,

                };
            })

        });
        },

        /*=================================*/
        /*=           Contact Form          =*/
        /*=================================*/

        contactFrom: function () {
        $('[data-cafediaform]').each(function () {
            var $this = $(this);
            $('.form-result', $this).css('display', 'none');

            $this.submit(function () {

                $('button[type="submit"]', $this).addClass('clicked');

                                // Create a object and assign all fields name and value.
                                var values = {};

                                $('[name]', $this).each(function () {
                                    var $this = $(this),
                                    $name = $this.attr('name'),
                                    $value = $this.val();
                                    values[$name] = $value;
                                });

                                // Make Request
                                $.ajax({
                                    url: $this.attr('action'),
                                    type: 'POST',
                                    data: values,
                                    success: function success(data) {

                                        if (data.error == true) {
                                            $('.form-result', $this).addClass('alert-warning').removeClass('alert-success alert-danger').css('display', 'block');
                                        } else {
                                            $('.form-result', $this).addClass('alert-success').removeClass('alert-warning alert-danger').css('display', 'block');
                                        }
                                        $('.form-result > .content', $this).html(data.message);
                                        $('button[type="submit"]', $this).removeClass('clicked');
                                    },
                                    error: function error() {
                                        $('.form-result', $this).addClass('alert-danger').removeClass('alert-warning alert-success').css('display', 'block');
                                        $('.form-result > .content', $this).html('Sorry, an error occurred.');
                                        $('button[type="submit"]', $this).removeClass('clicked');
                                    }
                                });
                                return false;
                            });

        });
        }

    };

    PIXELSIGNS.documentOnReady = {
        init: function(){
            PIXELSIGNS.initialize.init();       

        },
    };

    PIXELSIGNS.documentOnLoad = {
        init: function(){
            $("#preloader").fadeOut("slow");


        },
    };

    PIXELSIGNS.documentOnResize = {
        init: function(){

        },
    };

    PIXELSIGNS.documentOnScroll = {
        init: function(){
            PIXELSIGNS.initialize.sectionBackground();

            if ($(window).scrollTop() > 300){
                $('.return-to-top').addClass('back-top');
            } else {
                $('.return-to-top').removeClass('back-top');
            }

            /* Header Sticky */
            /* Sticky Menu */
            if ($(this).scrollTop() > 150){
                $('#header').addClass("fixed")
            }
            else{
                $('#header').removeClass("fixed")
            }

            /* Mobile Nav */
            if ($(window).scrollTop() > 54){
                $('#mobile-nav-wrap,.mobile-menu-inner').addClass('mnav-fixed');
            } else {
                $('#mobile-nav-wrap, mobile-menu-inner').removeClass('mnav-fixed');
            }


        },
    };

    // Initialize Functions
    $(document).ready( PIXELSIGNS.documentOnReady.init );
    $(window).on( 'load', PIXELSIGNS.documentOnLoad.init );
    $(window).on( 'resize', PIXELSIGNS.documentOnResize.init );
    $(window).on( 'scroll', PIXELSIGNS.documentOnScroll.init );

})(jQuery);
