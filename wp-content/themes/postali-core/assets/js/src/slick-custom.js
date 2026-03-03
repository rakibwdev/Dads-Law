/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

    var screenWidth = $(window).width();

	$('#awards').slick({
		dots: false,
		infinite: true,
        arrows:true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 3000,
  		speed: 800,
		slidesToShow: 6,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
              breakpoint: 821,
              settings: {
                    slidesToShow: 3,
                }
            },
            {
              breakpoint: 601,
              settings: {
                    slidesToShow: 2,
                }
            }
        ]
	});

    $('.testimonial-slider').slick({
		dots: false,
		infinite: true,
        arrows:true,
		fade: false,
		autoplay: false,
  		autoplaySpeed: 3000,
  		speed: 800,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
        cssEase: 'ease-in-out',
        appendArrows: '.slider-arrows-custom'
	});

    $('.steps-wrapper').slick({
		dots: false,
		infinite: true,
        arrows:true,
		fade: false,
		autoplay: false,
  		autoplaySpeed: 3000,
  		speed: 800,
		slidesToShow: 3,
		slidesToScroll: 1,
    	swipeToSlide: true,
        cssEase: 'ease-in-out',
        appendArrows: '.steps-slider-arrows-custom',
        responsive: [
            {
              breakpoint: 821,
              settings: {
                    slidesToShow: 2,
                }
            },
            {
              breakpoint: 601,
              settings: {
                    slidesToShow: 1,
                }
            }
        ]
	});

    $('.testimonial-image-slider').slick({
		dots: false,
		infinite: true,
        arrows:false,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 3000,
  		speed: 800,
		slidesToShow: 2,
		slidesToScroll: 1,
    	swipeToSlide: true,
        cssEase: 'ease-in-out',
        responsive: [
            {
              breakpoint: 601,
              settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    if (screenWidth < 821) {
        $('.practice-areas-mobile-scroller').slick({
            dots: false,
            infinite: true,
            arrows:true,
            fade: false,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            swipeToSlide: true,
            cssEase: 'ease-in-out',
            appendArrows: '.mobile-pa-slider-arrows',
            responsive: [
                {
                breakpoint: 601,
                settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }
	
});