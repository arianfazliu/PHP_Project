//canvas
    // set up initial variables
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
 
  ctx.beginPath();
  ctx.moveTo(100,0);
  ctx.lineTo(100,200);
  ctx.stroke();

function drawCircle(x){
  ctx.beginPath();
  ctx.arc(x,100,10,0,2*Math.PI);
  ctx.fillStyle="red";
  ctx.fill();
}
var x = 0;
setInterval(function(){ 
  ctx.clearRect(0,0,200,200);
  drawCircle(x%200);
  x++;
}, 25);