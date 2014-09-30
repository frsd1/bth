 // JavaScript Document

/**
 * Place your JS-code here.
 */
$(document).ready(function () {
    'use strict';
    var text,i, tiles, area = document.getElementById('flash'), baddie = document.getElementById('baddie'), moveIt, animate,  step = 32, newSpace, moveRight, moveLeft, moveUp, moveDown,
  left = baddie.offsetLeft,
  top  = baddie.offsetTop,
  
  gameArea = [
    18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,
    18,10,10,10,10,10,10,10,10,10,10,10,10,10,10,22,17,17,17,17,17,17,19,18,
    18,10,10,10,10,10,10,10,10,10,10,10,10,10,10,23,24,24,24,24,24,24,28,18,
    18,10,15,15,10,10,10,10,10,16,16,16,16,16,16,10,10,10,10,10,10,10,10,18,
    18,10,15,15,10,10,10,10,10,10,10,10,10,10,10,16,10,10,10,10,10,10,10,18,
    18,10,15,10,10,10,10,10,10,16,10,10,10,10,10,16,13,10,12,13,10,12,10,18,
    18,10,15,10,10,15,15,10,10,16,10,10,10,10,10,10,16,10,10,10,10,10,10,18,
    18,10,15,10,10,15,15,10,10,16,10,10,10,10,10,10,16,16,10,10,10,10,10,18,
    18,10,15,10,10,15,15,10,10,10,10,10,10,10,10,10,16,16,10,10,10,10,10,18,
    18,10,15,15,15,15,15,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,18,
    18,10,15,15,15,15,15,10,10,10,10,10,10,10,10,10,16,16,10,10,10,10,10,18,
    18,10,15,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,18,
    18,10,15,10,10,10,10,10,10,10,16,16,16,16,16,16,16,10,10,10,10,10,10,18,
    18,10,15,10,10,10,10,10,16,10,16,10,10,10,10,10,10,10,10,10,21,10,10,18,
    18,10,15,10,10,10,10,10,16,10,16,10,10,10,10,10,10,10,10,10,21,10,10,18,
    18,10,15,10,10,10,10,10,16,10,16,10,10,10,10,10,10,10,10,10,12,10,10,18,
    18,10,15,21,21,21,21,21,10,10,10,10,10,16,10,16,10,10,10,10,21,10,10,18,
    18,10,21,21,21,21,21,21,21,10,10,10,10,10,10,16,10,10,10,10,21,10,10,18,
    18,10,21,21,21,21,21,10,10,10,10,10,16,10,10,10,10,10,10,10,21,10,10,18,
    18,10,10,10,10,10,10,10,16,16,16,16,16,16,16,16,10,10,10,10,21,10,10,18,
    18,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,21,10,10,18,
    18,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,21,21,21,21,21,21,21,18,
    18,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,11,18,
    18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18,18],
    
    curSpace = 25;
    
    //Draw game area
      animate = function(moveLeft, moveTop) {
      baddie.style.left = (baddie.offsetLeft + moveLeft) + 'px';
      baddie.style.top  = (baddie.offsetTop + moveTop) + 'px';
      };
      //moveIt(32, 32);
      
      moveIt = function(direction){
        $("#baddie").appendTo("#t"+curSpace);
        
        switch(direction){
          case 'left':
            animate(step, 0);
            animate(-step, 0);
          break;
          case 'right':
            animate(-step, 0);
            animate(step, 0);
          break;
          case 'up':
            animate(0, step);
            animate(0, -step);
          break;
          case 'down':
            animate(0, -step);
            animate(0, step);
          break;
        }
        
      };

    for(i=0;i<gameArea.length;i++){
      tiles = document.createElement('div')
      tiles.innerHTML = "";
      tiles.className = "tiles tile" + gameArea[i];
      tiles.id = "t" + i;
      area.appendChild(tiles);
    }
    
    $("#baddie").appendTo("#t25");
    
    moveRight = function(){
      newSpace = curSpace + 1;
      if(gameArea[newSpace] == 10){
        curSpace = newSpace
        moveIt('right');
      }
      if(gameArea[newSpace] == 11){
        curSpace = newSpace
        moveIt('right');
        alert('Du kom fram!'); 
      }
      if(gameArea[newSpace] == 13){
        curSpace = newSpace
        moveIt('right');
      }
      if(gameArea[newSpace] == 17){
        curSpace = newSpace
        moveIt('right');
      }
      if(gameArea[newSpace] == 19){
        curSpace = newSpace
        moveIt('right');
      }
      if(gameArea[newSpace] == 22){
        curSpace = newSpace
        moveIt('right');
      } else { 
        console.log('An object is in the way');
      }
    }

    moveUp = function(){
      newSpace = curSpace - 24;
      if(gameArea[newSpace] == 10){
        curSpace = newSpace
        moveIt('up');
      }else{
        console.log('An object is in the way');
      }
    }
    
    moveDown = function(){
      newSpace = curSpace + 24;
      if(gameArea[newSpace] == 10){
        curSpace = newSpace
        moveIt('down');
      }
      if(gameArea[newSpace] == 28){
        curSpace = newSpace
        moveIt('down');
      }
      if(gameArea[newSpace] == 14){
        curSpace = newSpace
        moveIt('down');
      }else{
        console.log('An object is in the way');
      }
    }
    
    moveLeft = function(){
      newSpace = curSpace - 1;
      if(gameArea[newSpace] == 10){
        curSpace = newSpace
        moveIt('left');
      }else{
        console.log('An object is in the way');
      }
    }

        
      document.onkeydown = function(event) {
      var key;
      key = event.keyCode || event.which;
      switch(key) {
        case 37:  // ascii value for arrow left 
        baddie.className='baddie left'; 
        moveLeft();
        break;
        case 39:  // ascii value for arrow right 
        baddie.className='baddie right'; 
        moveRight();
        break;
        case 38:  // arrow up
        baddie.className='baddie up';
        moveUp();
        break;
        case 40:  // arrow down
        baddie.className='baddie down';
        moveDown();
        break;
        default:
        baddie.className='baddie down';
        break;
      }
      }
    

    
    console.log('Everything is ready.');
});
