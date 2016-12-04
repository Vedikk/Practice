/**
 * Created by mayst on 04.12.2016.
 */
$(document).ready(function(){
    var owl = $(".owl-carousel").owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
        autoHeight:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive: {
            0:{
                items:1
            },
            768:{
                items: 2,
                nav:true
            }
        }
    }).data('owlCarousel');

    $('a[href^="#"]').click(function(){
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 900);
        return false;
    });
});