//govnoCod

$(document).ready(function () {
    //anchor
    $('a[href^="#"]').click(function(){
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 900);
        return false;
    });

    //nav
    function addHeaderH() {
        var headerHeight = $('.header').height();
        $('.top-slider').css('marginTop', headerHeight);
    }
    addHeaderH();



    $(window).resize(addHeaderH);

    function barsClick() {
        var $nav = $('.nav');
        $nav.slideToggle('slow');

    }
    $('#menuBars').click(barsClick);

    //Gallery
    $(".small-img").click(function(){
        var img = $(this);
        var src = img.attr('src');
        $("body").append("<div class='popup'>"+
            "<div class='popup_bg'></div>"+
            "<img src='"+src+"' class='popup_img' />"+
            "</div>");
        $(".popup").fadeIn(800);
        $(".popup_bg").click(function(){
            $(".popup").fadeOut(800);
            setTimeout(function() {
                $(".popup").remove();
            }, 800);
        });
    });

});
