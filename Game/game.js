/**
 * Created by mayst on 15.07.2016.
 */
window.onload= init;

var map;
var ctxMap;

var pl;
var ctxPl;

var enemyCvs;
var ctxEnemy;

var drawBtn;
var clearBtn;

var gameWidth = 800;
var gameHeight = 500;

var background = new Image();
background.src = "img/bg.jpg";

var tiles = new Image();
tiles.src = "img/tiles.png";

var player;
var enemies = [];

var isPlaying;

var requestAnimFrame = window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame;


function init()
{
    map = document.getElementById("map");
    ctxMap = map.getContext("2d");

    pl= document.getElementById("player");
    ctxPl = map.getContext("2d");

    enemyCvs= document.getElementById("enemy");
    ctxEnemy = enemyCvs.getContext("2d");

    map.width = gameWidth;
    map.height = gameHeight;
    pl.width = gameWidth;
    pl.height = gameHeight;
    enemyCvs.width = gameWidth;
    enemyCvs.height = gameHeight;

    drawBtn = document.getElementById("drawBtn");
    clearBtn = document.getElementById("clearBtn");

    drawBtn.addEventListener("click", drawRect, false);
    clearBtn.addEventListener("click", clearRect, false);

    player = new Player();

    drawBg();
    startLoop();


    document.addEventListener("keydown", chekKeyDown, false);
    document.addEventListener("keyup", chekKeyUp, false);
}

function spawnEnemy (count)
{
    for (var i=0; i< count; i++)
        enemies[i] = new Enemy();
}


function loop ()
{
    if(isPlaying)
    {
        draw();
        update();
        requestAnimFrame(loop);
    }
}

function startLoop()
{
  isPlaying = true;
    loop();
}

function stopLoop()
{
    isPlaying = false;
}

function draw()
{
    player.draw();

    clearCtxEnemy();
    for (var i = 0; enemies.length > i; i++) {
        enemies[i].draw();
    }
}

function update()
{

    player.update();

    for (var i = 0; enemies.length > i; i++) {
        enemies[i].update();
    }

}

function Player()
{
    this.srcX = 0;
    this.srcY = 0;
    this.drawX = 0;
    this.drawY = 0;
    this.width = 141;
    this.height = 82;
    this.speed = 3;

    //for keyboard
    this.isUp = false;
    this.isDown = false;
    this.isRight = false;
    this.isLeft = false;

    this.speed = 5;

}

function Enemy()
{
    this.srcX = 0;
    this.srcY = 88;
    this.drawX = Math.floor(Math.random()*gameWidth)+ gameWidth;
    this.drawY = Math.floor(Math.random() * gameHeight);
    this.width = 84;
    this.height = 92;
    this.speed = 8;


}

Enemy.prototype.draw = function ()
{

    clearCtxEnemy()
    ctxEnemy.drawImage(tiles, this.srcX, this.srcY, this.width, this.height,
        this.drawX, this.drawY, this.width, this.height );
}

Enemy.prototype.update = function()
{
    this.drawX -= 7;
    if(this.drawX < 0)
    {
        this.drawX = Math.floor(Math.random()*gameWidth)+gameWidth;
        this.drawY = Math.floor(Math.random() * gameHeight);
    }
}

Player.prototype.draw = function ()
{

    drawBg();
    ctxPl.drawImage(tiles, this.srcX, this.srcY, this.width, this.height,
        this.drawX, this.drawY, this.width, this.height );
}

Player.prototype.update = function()
{
    this.chooseDir();
}



Player.prototype.chooseDir = function()
{
    if(this.isUp)
        this.drawY -= this.speed;
    if(this.isDown)
        this.drawY += this.speed;
    if(this.isRight)
        this.drawX += this.speed;
    if(this.isLeft)
        this.drawX -= this.speed;

}

function chekKeyDown(e)
{
    var keyID = e.keyCode || e.which;
    var keyChar = String.fromCharCode(keyID);

    if(keyChar == "W")
    {
        player.isUp = true;
        e.preventDefault();
    }
    if(keyChar == "S")
    {
        player.isDown = true;
        e.preventDefault();
    }
    if(keyChar == "D")
    {
        player.isRight = true;
        e.preventDefault();
    }
    if(keyChar == "A")
    {
        player.isLeft = true;
        e.preventDefault();
    }
}

function chekKeyUp(e)
{
    var keyID = e.keyCode || e.which;
    var keyChar = String.fromCharCode(keyID);

    if(keyChar == "W")
    {
        player.isUp = false;
        e.preventDefault();
    }
    if(keyChar == "S")
    {
        player.isDown = false;
        e.preventDefault();
    }
    if(keyChar == "D")
    {
        player.isRight = false;
        e.preventDefault();
    }
    if(keyChar == "A")
    {
        player.isLeft = false;
        e.preventDefault();
    }
}

function drawRect()
{
    ctxMap.fillStyle = "#3D3D3D";
    ctxMap.fillRect (10, 10, 100, 100);
}
function clearRect()
{
    ctxMap.clearRect(0, 0, 800, 500)
}

function clearCtxPlayer()
{
    ctxPl.clearRect(0,0,gameWidth,gameHeight);
}

function clearCtxEnemy()
{
    ctxEnemy.clearRect(0,0,gameWidth,gameHeight);
}

function drawBg()
{
    ctxMap.drawImage(background, 0, 0, 800, 480,
        0, 0, gameWidth, gameHeight);
}


