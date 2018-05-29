$(document).ready(function(){
  // Select all links with hashes
  $('.navbar a[href*="#"], .footer-nav a[href*="#"]')
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


//Menu Active Session
    jQuery('header .navbar-nav a').click(function(){
      jQuery('.nav-item').removeClass('active');
      jQuery(this).parents('.nav-item').addClass('active');
    });

//product function
if(jQuery('body').find('.home-page').length > 0){

$(window).scroll(function() {
if ($(window).width() > 960) {
  var backgroundimageofset = $(".product-background-image").offset().top - 100;  
  var scrolloffset = $(window).scrollTop()
/*  var elemenarea = jQuery('.product-background-image').css('height');
  var fullcontex = backgroundimageofset + elemenarea*/
  if(scrolloffset >= backgroundimageofset){
    jQuery('.product-background-image').css({
      "background-position": "40%" + ($(window).scrollTop()+200) + "px",
    });    
  }
}

else{
  var backgroundimageofset = $(".product-background-image").offset().top - 50;  
  var scrolloffset = $(window).scrollTop()
/*  var elemenarea = jQuery('.product-background-image').css('height');
  var fullcontex = backgroundimageofset + elemenarea*/
  if(scrolloffset >= backgroundimageofset){
    jQuery('.product-background-image').css({
      "background-position": "80%" + ($(window).scrollTop()+50) + "px",
    });    
  }  
}


});
}

else{
}

//Menu Toggle Responsive
jQuery('.menu-toggle').click(function(){
jQuery('header .navbar-nav').slideToggle();
});

$(".selectsearch").chosen();


jQuery('.payment-option-method input[type=radio]').change(function(){
var checkin = jQuery('.payment-option-method input[type=radio]:checked').attr('id');
jQuery('.detail-box').slideUp();
jQuery('.'+ checkin).slideDown();
jQuery('a').removeAttr('disabled');
})

});