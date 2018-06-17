(function($){  // Update the date of copyright notice
  "use strict";

  var d = new Date();
  document.getElementById("date").innerHTML=d.getFullYear();

  // Carousel Auto Slide
  $('#introCarousel').carousel({
  interval: 3000,
  cycle: true
  });

  // Scroll reveal calls
  window.sr = ScrollReveal();
  sr.reveal('.sr-icons', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 200);
  sr.reveal('.sr-button', {
    duration: 1000,
    delay: 200
  });
  sr.reveal('.sr-contact', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 300);

  var stickyNavTop = $('#mainNav').offset().top;

  $(window).scroll(function() {
      if ($(window).scrollTop() > stickyNavTop) {
          $('#mainNav').addClass('fixed');
      }
      else {
          $('#mainNav').removeClass('fixed');
      }
  });


})(jQuery);
