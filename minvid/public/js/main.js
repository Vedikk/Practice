/**
 * Created by mayst on 22.02.2017.
 */

//on page add video, pull video name

var fileName=document.getElementById('file-name');

var global_file= document.getElementById ('upload_video_path');

global_file.addEventListener('change', getFileName);

function getFileName () {

    var file = document.getElementById ('upload_video_path').value;

    file = file.replace (/\\/g, "/").split ('/').pop ();

    fileName.innerHTML = 'The name of file: ' + file;

}