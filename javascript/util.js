document.addEventListener("keyup", function(event) {
                
            if (event.keyCode === 69) {
                document.getElementById("div1").click();
            }
            if (event.keyCode === 32) {
                document.getElementById("home").click();
            }
            if (event.keyCode === 73) {
                document.getElementById("div2").click();
            }
            if (event.keyCode === 88) {
                document.getElementById("div3").click();
            }
            if (event.keyCode === 77) {
                document.getElementById("div4").click();
            }
            });

var audios = "";
var p = "";

function play(){
var audio = audios;
audio.play();}

function playa(p){
audios = p;
play();}