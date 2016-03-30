function fondo(){
              document.getElementById('mision').style.display="none";
             
           }
function emerge(z){
               var imgs = ["../moodlesinadep/img/Diapositiva3.png","../moodlesinadep/img/Diapositiva4.png"];
               console.log(imgs[z]);
              document.getElementById('imgs').src = imgs[z];
              document.getElementById('emergente').style.display="block";
              document.getElementById('mision').style.display="block";
}