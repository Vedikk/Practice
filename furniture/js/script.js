/**
 * Created by mayst on 17.01.2017.
 */
$(document).ready(function () {
    $('a[href^="#"]').click(function(){
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 900);
        return false;
    });
});
