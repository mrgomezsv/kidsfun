$(document).ready(function(){
   /* ---------------------Testimonial carousel------------------- */
  $(".testimonials-carousel").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  });