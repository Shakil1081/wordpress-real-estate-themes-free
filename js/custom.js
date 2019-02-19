
$( document ).ready(function() {
        $('.screenSlider .owl-carousel').owlCarousel({
        loop:true,
        margin:20,
            dots:false,
        responsiveClass:true,
            autoplay:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:false,
                loop:true
            }
        }
    })
    });
$( document ).ready(function() {
        $('.screenSlider1 .owl-carousel').owlCarousel({
        loop:true,
        margin:20,
            dots:false,
        responsiveClass:true,
            autoplay:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:false,
                loop:true
            }
        }
    })
    });
/*=============================================================================================*/

/*Screens Buttons*/
var gallery = $('.gallery a').simpleLightbox();

$('#btnLeft').click(function(e){
        e.preventDefault();
    $(".screenSlider .owl-carousel").trigger('prev.owl');
})
$('#btnRight').click(function(e){
        e.preventDefault();
    $(".screenSlider .owl-carousel").trigger('next.owl');
})

$('#btnLeft1').click(function(e){
        e.preventDefault();
    $(".screenSlider1 .owl-carousel").trigger('prev.owl');
})
$('#btnRight1').click(function(e){
        e.preventDefault();
    $(".screenSlider1 .owl-carousel").trigger('next.owl');
})
/*=============================================================================================*/

/*Full Screen Video Button*/

var bunnyVideo = document.getElementById("bVideo");

function playPause() {
  var el = document.getElementById("playButton");
  if (bunnyVideo.paused) {
    bunnyVideo.play();
    el.className ="";
  } else {
  
    bunnyVideo.pause();
    el.className = "playButton";
  }
}

//bunnyVideo.addEventListener("click", playPause, false);

/*=============================================================================================*/

/*Testimonial Carousel*/


/*=============================================================================================*/

/*Carousel Buttons*/

/*=============================================================================================*/

$(document).ready(function(){
$("#wpcf7-f38-o1-2 .wpcf7-form p").remove();
});


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
            $target.attr('tabindex','-1'); //Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

