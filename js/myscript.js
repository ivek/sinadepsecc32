function fondo(){
              document.getElementById('mision').style.display="none";
              document.getElementById("imgs").src = "";
             
           }
function emerge(z){
               var imgs = ["../moodlesinadep/img/Diapositiva3.png","../moodlesinadep/img/Diapositiva4.png"];
               console.log(imgs[z]);
              document.getElementById('imgs').src = imgs[z];
              document.getElementById('imgs').alt = imgs[z];
              document.getElementById('emergente').style.display="block";
              document.getElementById('mision').style.display="block";
}