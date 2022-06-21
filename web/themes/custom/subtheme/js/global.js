/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function (context, settings) {

    	$('.owl-carousel').owlCarousel({
          loop:true,
          margin:15,
          responsiveClass:true,
          navText : ['<i class="bi bi-chevron-left"></i>','<i class="bi bi-chevron-right"></i>'],
          responsive:{
              0:{
                  items:1,
                  nav:false,
                  dots: true,
              },
              600:{
                  items:1,
                  nav:false,
                  dots: true,
              },
              1000:{
                  items:3,
                  nav:true,
                  loop:false,
                  dots:false
              }
          }
      })

    	
    }
  };

})(jQuery, Drupal);
