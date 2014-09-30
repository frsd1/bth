/**
 * Pushing the ball.
 */
$(document).ready(function(){
  'use strict';
  var text = document.getElementById('text'),
      flash = document.getElementById('flash'),    
      theBall, pos;

  text.className = 'black';
  text.innerHTML = '<b>Click the ball to make it move around.</b>';

  theBall = {};

  theBall.image = 'http://png-5.findicons.com/files/icons/547/sport/32/baseball_ball.png';
  theBall.position = {x:20, y:20}
  theBall.dimension = {w:32, h:32}
  
  pos = Mos.getOffset(flash);
  theBall.canvas = {
    x: pos.left,
    y: pos.top,
    x2: pos.left + flash.clientWidth - theBall.dimension.w,
    y2: pos.top + flash.clientHeight - theBall.dimension.h
  }
   
  theBall.position.X = 27;  
  
  theBall.HTMLelement = document.getElementById('ball');
  
  theBall.draw = function () {
    this.HTMLelement.style.backgroundImage = 'url(' + this.image + ')';
    this.HTMLelement.style.left = this.position.x + 'px';
    this.HTMLelement.style.top = this.position.y + 'px';
    console.log('Drawing ball at: ' + this.position.x + ' x ' + this.position.y);
  }
  
  theBall.moveTo = function (x, y) {
    this.position.x = x;
    this.position.y = y;
    this.draw();
  }
  
  theBall.keepWithinRange = function (a, min, max) {
    var b = a >= min ? ( a <= max ? a : max) : min;
    console.log('Check if ball is within the area, range (requested pos, min, max): ' + a + ':' + min + ':' + max + ' returns ' + b);
    return b;
  }
  
  theBall.moveBy = function (x, y) {
    console.log('Trying to move ball by: ' + x + ' x ' + y);
    this.position.x = this.keepWithinRange(this.position.x + x, this.canvas.x, this.canvas.x2);
    this.position.y = this.keepWithinRange(this.position.y + y, this.canvas.y, this.canvas.y2);
    this.draw();
  }
  
  theBall.pushAt = function (x, y) {
    var newX, newY;
    newX = (this.position.x + this.dimension.w/2 - x) * 10;
    newY = (this.position.y + this.dimension.h/2 - y) * 10;
    console.log('Current position is: ' + this.position.x + ' x ' + this.position.y);
    this.moveBy(newX, newY);
  }
  
  theBall.center = function () {
    this.position.x = this.canvas.x + (this.canvas.x2 - this.canvas.x)/2;
    this.position.y = this.canvas.y + (this.canvas.y2 - this.canvas.y)/2;
    this.draw();
    console.log('Centered ball at: ' + this.position.x + ' x ' + this.position.y);
  }
  
  theBall.HTMLelement.addEventListener('click', function (event) {
    //myBall.pushAt(event.clientX, event.clientY);
    theBall.pushAt(event.pageX, event.pageY);
  });
  
  theBall.center();
  
  console.log('Ready');
});

