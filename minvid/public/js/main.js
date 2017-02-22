/**
 * Created by mayst on 22.02.2017.
 */

//on page add video, pull video name


if (window.location.pathname == '/add-video') {

    var fileName = document.getElementById('file-name');
    var global_file = document.getElementById('upload_video_path');
    //event
    global_file.addEventListener('change', getFileName);

    function getFileName() {

        var file = document.getElementById('upload_video_path').value;

        //file name creating
        file = file.replace(/\\/g, "/").split('/').pop();
        fileName.innerHTML = 'File name: ' + file;
    }

}



