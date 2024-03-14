 
/*Animation on scroll*/

  AOS.init();


/*Slick SLider*/

var slidesToShowCat = 7


if (jQuery(window).width() <= 900) slidesToShowCat=4;

jQuery(".slick-slider-sellers").slick({
        slidesToShow: slidesToShowCat,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 104000,
        prevArrow: jQuery('#sellers-prev-slide'),
        nextArrow: jQuery('#sellers-next-slide')
      });

jQuery(".slick-slider-deals").slick({
        slidesToShow: slidesToShowCat,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 104500,
        prevArrow: jQuery('#deals-prev-slide'),
        nextArrow: jQuery('#deals-next-slide')
      });


/**Accordion**/

(function($) {

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });

    console.log(navigator.userAgent)
    var _userAgent = navigator.userAgent;
// console.log(_userAgent.indexOf("Safaris"))

if (jQuery(window).width() <= 600) {

    if(_userAgent.indexOf("Safari") != -1 && _userAgent.indexOf("Chrome") == -1 && _userAgent.indexOf("Firefox") == -1) {

        $('#spl-section-3 .left-side>img').css('width','60vw'); //45px
        $('#spl-section-3 .left-side>img').css('height','80vw'); 
        $('.spl-section-3-hiw .left-side>img').css('width','45vw');
        $('.spl-section-3-hiw .left-side>img').css('height','80vw');
        // $('#spl-section-3 .left-side>img').css('height','80vw');
        // #spl-section-3 .left-side>img
    }
}
    // remove scrollbar from page after open hamburger menu and fix design in safari
    $('#menu__toggle').click(function(j) {
        if ($(this).is(':checked')) {
           $('body').addClass("no-scrollbar");
           console.log('Yes is visible')
           if(_userAgent.indexOf("Safari") != -1)   $('#home-section-1').addClass("fix-safari-height");

        } else {
            if(_userAgent.indexOf("Safari") != -1)   $('#home-section-1').removeClass("fix-safari-height");
           $('body').removeClass("no-scrollbar");
           console.log('not visible')
        }
    });
    

})(jQuery);



/* Fix Overflow for AOS on mobile */

jQuery('[data-aos]').parent().addClass('hideOverflowOnMobile');


