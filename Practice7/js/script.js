/**
 * Created by mayst on 30.10.2016.
 */
$(document).ready(function () {
    $(".menu_button").click(function () {
        $('.top_nav').slideToggle();
    });
    $('a[href^="#"]').click(function(){
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 900);
        return false;
    });
});
