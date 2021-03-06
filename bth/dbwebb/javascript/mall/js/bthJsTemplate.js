/**
 * filename: bthJsTemplate.js
 * Helpers and tools to ease your JavaScript day.
 *
 * @author Fredrik Stenberg frsd14@student.bth.se
 */
/////////////////////////////////////////
//Return a random number
randomNr = function  (min, max) {
	return Math.floor((Math.random() * (max+1-min)) + min);
};
//Get unix time
//function getUnixtime () {
//	var time = new Date().getTime();
//	return time;
//};
//set time for start and stop. Return the difference
var starttiming=true;
var start=0;
function setStartStop () {	
	if(starttiming) {
		start = new Date().getTime();
		starttiming=false;
		return "";
	}
	if(!starttiming) {
		var stop = parseInt(new Date().getTime())-parseInt(start);
		var date = new Date(stop);
		var seconds = "0" + date.getSeconds();
		starttiming=true;
		return seconds+" Seconds";
	}
};
/////////////////////////////////////////

$(document).ready(function() {
//document.getElementById("flash").innerHTML = '<div><button onclick="location ='../'">Tillbaka</button></div>';
//document.getElementById("flash").innerHTML = '<div>asfasasf</div>';

});


window.Template = (function(window, document, undefined ) {
  var Template = {};


  /**
   * Display the type of the object
   * @param the object to check
   */
  Template.reflection = function (obj) {
   
    // if(typeof obj === 'undefined')  console.log("is type: Undefined");
    // if(typeof obj === 'boolean')    console.log("is type: Boolean");
    // if(typeof obj === 'number')     console.log("is type: Number");
    // if(typeof obj === 'string')     console.log("is type: String");
    // if(typeof obj === 'function')   console.log("is type: Function");
    // if(typeof obj === 'object')     console.log("is type: Object");

    console.log("is type: " + typeof obj);      

    if(isNaN(obj)) {
      console.log("is NaN, Not a Number");
    }

    if(isFinite(obj)) {
      console.log("is a real number, not Infinite nor NaN");
    }

  
    if(obj instanceof Array)    console.log("is instance of: Array");
    if(obj instanceof Boolean)  console.log("is instance of: Boolean");
    if(obj instanceof Date)     console.log("is instance of: Date");
    if(obj instanceof Function) console.log("is instance of: Function");
    if(obj instanceof Number)   console.log("is instance of: Number");
    if(obj instanceof Object)   console.log("is instance of: Object");
    if(obj instanceof RegExp)   console.log("is instance of: RegExp");
    if(obj instanceof String)   console.log("is instance of: String");
    if(obj instanceof Error)    console.log("is instance of: Error");

    if(obj !== null && typeof obj !== 'undefined') {
      console.log("toString(): " + obj.toString());
      console.log("valueOf(): " + obj.valueOf());      
    }
  };
  
 
 /*
 function getAllPropertyNames( obj ) {
    var props = [];

    do {
        Object.getOwnPropertyNames( obj ).forEach(function ( prop ) {
            if ( props.indexOf( prop ) === -1 ) {
                props.push( prop );
            }
        });
    } while ( obj = Object.getPrototypeOf( obj ) );

    return props;
}*/


  /**
   * Display properties of an object
   * @param the object to show
   */
  Template.properties = function (obj) {
    if(typeof obj !== 'object') {
      console.log('Not an object.');
    } else {
      console.log('Object has the following properties:')
      for (var prop in obj) {
        //if (obj.hasOwnProperty(prop)) {
          console.log(prop + ' : ' + obj[prop]);
        //}
      }
    }
  };
  
 
  /**
   * Dump own properties of an object
   * @param the object to show
   */
  Template.dump = function (obj) {
    if(typeof obj !== 'object') {
      console.log('Not an object.');
    } else {
      for (var prop in obj) {
        if (obj.hasOwnProperty(prop)) {
          console.log(prop);
        }
      }
    }
  };
  
 
  /**
   * Dump properties and values of an object
   * @param the object to show
   * @returns string
   */
  Template.dumpAsString = function (obj) {
    var s = '\n';
    for (var prop in obj) {
      if (obj.hasOwnProperty(prop)) {
        s += prop + ' : ' + obj[prop] + '\n';
      }
    }
    return s;
  };
  
 
  /**
   * Delete cached LESS files from local storage.
   * @param regular expressen to search for, for example /style.less/
   */
  Template.deleteLESSFromLocalStorage = function (which) {
    for (var item in window.localStorage) {
      if (item.match(which)) {
        console.log('Deleted ' + item + ':' + (delete window.localStorage[item]));
      }
    }
  };
  

  /**
   * Generate a random number.
   * @param min the smallest possible number
   * @param max the largest possible number
   * @returns a random number where min >= number <= max
   */
  Template.random = function (min, max) {
    return Math.floor(Math.random()*(max+1-min)+min);
  };
  /**
   * Return Unix time
   *
   */
  Template.getUnixtime = function () {
	var time = new Date().getTime();
	return time;
  };



  /**
   * Get the position of an element.
   * http://stackoverflow.com/questions/442404/dynamically-retrieve-html-element-x-y-position-with-javascript
   * @param el the element.
   */
  Template.getOffset = function ( el ) {
      var _x = 0;
      var _y = 0;
      while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
          _x += el.offsetLeft - el.scrollLeft;
          _y += el.offsetTop - el.scrollTop;
          el = el.offsetParent;
      }
      return { top: _y, left: _x };
  }
  //var x = getOffset( document.getElementById('yourElId') ).left; 

  // Expose public methods
  return Template;
  
})(window, window.document); 


window.onload = function Start() {
//	document.getElementById('flash').innerHTML = 'Javascript-programmering - Fredrik Stenberg';
	addMenu("Tillbaka",'../');
	addMenu("Literal(u1)",'../literal');
	addMenu("u2",'../datatypes');
	addMenu("u3",'../strings');
	addMenu("u4",'../dicefunc');
	addMenu("u5",'../pushingball');
	addMenu("u6",'../animate');
	addMenu("u7",'../boulderdash');
	addMenu("u8",'../roulette');
	addMenu("u9",'../mosextra');

}
var addMenu = function (name,direction) {

	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = name;
	placeHolder = document.getElementById("menuAssignment");
	placeHolder.appendChild(myButton);
	myButton.onclick = 	item = function () {location = direction;}
}





