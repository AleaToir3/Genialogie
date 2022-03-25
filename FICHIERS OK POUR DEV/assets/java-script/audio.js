//fonction de lecture
function playing(playID, pauseID, playerID){
    var play = document.querySelector(playID);
    var pause = document.querySelector(pauseID);
    var player = document.querySelector(playerID);

    play.addEventListener("click", function(){
        player.play();
        play.style.display = "none";
        pause.style.display = "inline";
    })
}

//fonction de mise en pause
function paused(playID, pauseID, playerID){
    var play = document.querySelector(playID);
    var pause = document.querySelector(pauseID);
    var player = document.querySelector(playerID);

    pause.addEventListener("click", function(){
        player.pause();
        play.style.display = "inline";
        pause.style.display = "none";
    })
}


//appel des fonctions
playing("#play","#pause","#player");
paused("#play","#pause","#player");