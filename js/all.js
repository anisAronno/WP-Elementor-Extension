// navbar hover
// (function($) {

//     // ==========================================Home Page==========================================
//     // navbar hover
   

   
// })(jQuery);

$('#main_navbar').bootnavbar();




// slick carousel
// added theme-slick.css and slick.css and slick.min.js


$('.slick-responsive').slick({

  infinite: true,
  dots: true,
  autoplay: true,
  autoplaySpeed: 1500,
  slidesToShow: 6,
  slidesToScroll: 1,
  
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// slick carousel end