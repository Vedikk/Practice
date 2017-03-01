/**
 * Created by mayst on 22.02.2017.
 */

if(window.location.pathname == '/home' || window.location.pathname == '/add-video' ){
    var inputFile = document.getElementById('inputFile');
    var inputFileLabel  = document.getElementById('inputFileLabel');
    inputFile.addEventListener('change', changeColor);
     function changeColor () {
         if( inputFile.value ){
             inputFileLabel.style.background = 'rgb(84, 170, 84)';
             inputFileLabel.innerHTML = inputFile.value;
             inputFileLabel.style.color = 'white';
         }
         else {
             inputFileLabel.innerHTML = 'Please select file!';
         }

    }

}
