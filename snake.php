<!DOCTYPE html>
<html>
<head>
    <title>Snake Game</title>
    <style>
    html,body{
        height: 100%;
        margin:0;
    }
    body{
    background:black;
    display: flex;
    align-items: center;
    justify-content: center;
}
    canvas{
        border: :1px solid white;

}
    </style>
</head>
<body>

<canvas width="400" height="400" id="game"></canvas>
<script>
    var canvas=document.getElementById('game');
    var context=canvas.getContext('2d');

   var grid=16;
   var count=0;
   var snake={
       x:160,
       y:160,
       dx:grid,
       dy:0,
       cells:[],
       maxCells:4


   };
   var apple={
     x:320,
     y:320
   };
   function  getRandomInt(min,max){
       return Math.floor(Math.random()*(max-min)) +min;
   }
   function loop(){
       requestAnimationFrame(loop);
       if(++count <4){
           return;
       }
       count =0;
       context.clearRect(0,0,canvas.width,canvas.height);
   }

</script>
</body>
</html>