//govnoCode

$(document).ready(function () {
    //anchor
    $('a[href^="#"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top-60}, 900);//-60 because header is fixed and his height is 60px
        return false;
    });

    //nav
    function addHeaderH() {
        var headerHeight = $('.header').height();
        // /v\ because header is fixed and blocks was under the header
        $('.top-slider').css('marginTop', headerHeight);
        $('.popup_img').css('marginTop', headerHeight);
    }

    addHeaderH();

    $(window).resize(addHeaderH);

    function barsClick() {
        var $nav = $('.nav');
        $nav.slideToggle('slow');

    }

    $('#menuBars').click(barsClick);

    //Gallery
    if ($(window).width() > 760) {
        function thumbClick() {
            var img = $(this);
            var src = img.attr('src');
            $("body").append("<div class='popup'>" +
                "<div class='popup_bg'></div>" +
                "<img src='" + src + "' class='popup_img' />" +
                "</div>");
            $(".popup").fadeIn(800);
            //************
            function popupRemove() {
                $(".popup").fadeOut(800);
                setTimeout(function () {
                    $(".popup").remove();
                }, 800);
            }
            //************
            $(".popup_bg").click(popupRemove);
            $('.popup_img').click(popupRemove);
        }
        $(".small-img").click( thumbClick);
    }

});
