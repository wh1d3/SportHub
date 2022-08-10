var cvs = document.getElementById("canvas");
var ctx = cvs.getContext("2d");

var bird = new Image();
var bg = new Image();
var fg = new Image();
var pipeUp = new Image();
var pipeBottom = new Image();

bird.src = "/game_img/flappy_bird_bird.png";
bg.src = "/game_img/flappy_bird_bg.png";
fg.src = "/game_img/flappy_bird_fg.png";
pipeUp.src = "/game_img/flappy_bird_pipeUp.png";
pipeBottom.src = "/game_img/flappy_bird_pipeBottom.png";

var fly = new Audio();
var score_audio = new Audio();

fly.src = "/audio/fly.mp3";
score_audio.src = "/audio/score.mp3";

var gap = 90;

document.addEventListener("keydown", moveUp);

function moveUp() {
 yPos -= 25;
 fly.play();
}

var pipe = [];

pipe[0] = {
 x : cvs.width,
 y : 0
}

var score = 0;
var xPos = 10;
var yPos = 150;
var grav = 1.5;

function draw() {
 ctx.drawImage(bg, 0, 0);

 for(var i = 0; i < pipe.length; i++) {
 ctx.drawImage(pipeUp, pipe[i].x, pipe[i].y);
 ctx.drawImage(pipeBottom, pipe[i].x, pipe[i].y + pipeUp.height + gap);

 pipe[i].x--;

 if(pipe[i].x == 125) {
    pipe.push({
    x : cvs.width,
    y : Math.floor(Math.random() * pipeUp.height) - pipeUp.height
 });
 }

 if(xPos + bird.width >= pipe[i].x
    && xPos <= pipe[i].x + pipeUp.width
    && (yPos <= pipe[i].y + pipeUp.height
    || yPos + bird.height >= pipe[i].y + pipeUp.height + gap) || yPos + bird.height >= cvs.height - fg.height) {
        alert("Ви програли. Ваш купон на знижку 25% на продукцію Nike: G495JKDSF34")
        location.reload();
 }

 if(pipe[i].x == 5) {
 score++;
 score_audio.play();
 }
 }

 ctx.drawImage(fg, 0, cvs.height - fg.height);
 ctx.drawImage(bird, xPos, yPos);

 yPos += grav;

 ctx.fillStyle = "#000";
 ctx.font = "24px Verdana";
 ctx.fillText("Рахунок: " + score, 10, cvs.height - 20);

 requestAnimationFrame(draw);

 if(score==3) {
    alert("Ви виграли. Ваш купон на знижку 50% на продукцію Nike: SA343DFJG8D")
    location.reload();
}
}

pipeBottom.onload = draw;