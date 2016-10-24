

function fadeIn (){
    document.getElementById('search').style.display='inline-block';
    document.getElementById('fa-search').style.display='none';
    document.getElementById('search').style.animationName = 'display_on';
}
function fadeOut (){
    document.getElementById('search').style.display='none';
    document.getElementById('search').style.animationName = 'display_off';
    document.getElementById('fa-search').style.display='inline-block';
}
