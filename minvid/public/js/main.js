/**
 * Created by mayst on 22.02.2017.
 */


/*style of browse button on home and add video pages*/
if (window.location.pathname == '/home' || window.location.pathname == '/add-video') {
    let inputFile = document.getElementById('inputFile');
    let inputFileLabel = document.getElementById('inputFileLabel');
    inputFile.addEventListener('change', changeColor);
    function changeColor() {
        if (inputFile.value) {
            inputFileLabel.style.background = 'rgb(84, 170, 84)';
            inputFileLabel.innerHTML = inputFile.value;
            inputFileLabel.style.color = 'white';
        }
        else {
            inputFileLabel.innerHTML = 'Please select file!';
        }

    }

}


$(document).ready(function () {

    /*owl carousel options*/
    $(".home-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: true,
        dots: true,
        responsive: {
            0: {
                touchDrag: true,
                items: 1
            },
            600: {
                items: 3,
                center: true,
                autoplay: true,
                autoplayHoverPause: true
            }
        }
    });


    /* ... if name of video > 38 */
    let $videoArray = $('.video_name');
    for (let videoName of $videoArray) {
        if (videoName.innerText.length >= 28) {
            videoName.innerText = (videoName.innerText.slice(0, 27) + '...');
        }
    }


    /* rating stars on comment*/
    let $bottomRating = $('#input-1-ltr-alt-xs');
    $bottomRating.rating({
        showCaption: false,
        hoverOnClear: false,
        step: 0.5,
        theme: 'krajee-fa',
        defaultCaption: '{rating} hearts',
        starCaptions: function (rating) {
            return rating == 1 ? 'One heart' : rating + ' hearts';
        },
        filledStar: '<i class="fa fa-heart"></i>',
        emptyStar: '<i class="fa fa-heart-o"></i>'
    });
    $bottomRating.on('rating.change', function (event, value, caption) {
        let $input = $("input[name='rating']");
        $input.val(value);
    });

    /*video avg rating*/
    $('#videoRate').rating({
        showClear: false,
        theme: 'krajee-fa',
        disabled: false,
        readonly: true,
        defaultCaption: '{rating} hearts',
        starCaptions: function (rating) {
            return rating == 1 ? 'One heart' : rating + ' hearts';
        },
        step: 0.1,
        filledStar: '<i class="fa fa-heart"></i>',
        emptyStar: '<i class="fa fa-heart-o"></i>'
    });
    /*welcome video rating*/
    $('.welcome_video_rating').rating({
        showClear: false,
        showCaption: false,
        theme: 'krajee-fa',
        disabled: false,
        readonly: true,
        size: 'xxs',
        defaultCaption: '{rating} hearts',
        starCaptions: function (rating) {
            return rating == 1 ? 'One heart' : rating + ' hearts';
        },
        step: 0.1,
        filledStar: '<i class="fa fa-heart"></i>',
        emptyStar: '<i class="fa fa-heart-o"></i>'
    });

    /*test ajax*/

    $('#moreBtn').click(function () {

        $.ajax({
            method: 'POST',
            url: url,
            data: {_token: token},
            async: true,
            success: function (msg) {
                console.log(this.data, this.url);
            },
            error: function (data) {
                console.log(data);
                alert("fail" + ' ' + this.data)
            },
        });
    });

});
