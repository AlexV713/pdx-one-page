//jQuery
$(document).ready(function(){

    $("#toggle").on("click", function() {
        $("#mobile-links").toggle(500);  
        $(".fa-bars").toggleClass("fa-times");
    });

      // Top of Page Function
    $(window).scroll(function(){
      if ($(document).scrollTop() > 300) {
          $("#backUp").css("display", "block");
      } else if ($(document).scrollTop() < 300) {
          $("#backUp").css("display", "none"); 
      }
    });

    $("#backUp").on("click", function() {
      $('html, body').animate({scrollTop: '0px'}, 300);
    });

});

//Image Gallery
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "flex";
  dots[slideIndex-1].className += " active";
} 