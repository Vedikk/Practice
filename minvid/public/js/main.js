/**
 * Created by mayst on 22.02.2017.
 */


/*style of browse button on home and add video pages*/
if (window.location.pathname == '/home' || window.location.pathname == '/add-video') {
    var inputFile = document.getElementById('inputFile');
    var inputFileLabel = document.getElementById('inputFileLabel');
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
        loop:true,
        margin:10,
        responsiveClass:true,
        nav:true,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3,
                center:true,
                autoplay:true,
                autoplayHoverPause: true
            }
        }
    });

    let $videoArray = $('.video_name');
    for ( let videoName of $videoArray){
        if(videoName.innerText.length >= 38  ){
           videoName.innerText  = (videoName.innerText.slice(0, 34)+'...');
        }
    }
    $("#jRate").jRate({
        backgroundColor: '#eded71' ,
        startColor: '#ff68be',
        endColor: "blue",
        width: 30,
        height: 30,
        precition: '0.1',
        onSet: function(rating) {
            $('#ratingInput').val(rating);
        }
    });


});
