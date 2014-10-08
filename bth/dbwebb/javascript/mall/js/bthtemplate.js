/**
 * filename: bthTemplate.js
 * Helpers and tools to ease your JavaScript day.
 *
 * @author Fredrik Stenberg frsd14@student.bth.se
 */
window.bthtemplate = (function(window, document, undefined ) {
//Create a empty object
  var bthtemplate = {};


  /**
   * Display the type of the object
   * @param the object to check
   */
  bthtemplate.reflection = function (obj) {
   
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
  bthtemplate.properties = function (obj) {
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
  bthtemplate.dump = function (obj) {
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
  bthtemplate.dumpAsString = function (obj) {
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
  bthtemplate.deleteLESSFromLocalStorage = function (which) {
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
  bthtemplate.random = function (min, max) {
    return Math.floor(Math.random()*(max+1-min)+min);
  };
  /**
   * Return Unix time
   *
   */
  bthtemplate.unixtime = function () {
	var time = new Date().getTime();
	return time;
  };

/////////////////////////////////////////
//Return a random number
	bthtemplate.randomNr = function  (min, max) {
		return Math.floor((Math.random() * (max+1-min)) + min);
	};
		var starttiming=true;
		var start=0;
	bthtemplate.setStartStop = function () {	
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
 	/**
   * Check if a array contains a pattern
   *
   */
	bthtemplate.contains = function(a, obj) {
    for (var i = 0; i < a.length; i++) {
    	if (a[i] === obj) {
     		return true;
      }
    }
    return false;
	}
	/////////////////////////////////////////
	// Is an object a string
	bthtemplate.isString = function (obj) {
    return typeof (obj) == 'string';
	};
	// Is an object a array
	bthtemplate.isArray = function (obj) {
    return obj && !(obj.propertyIsEnumerable('length')) 
        && typeof obj === 'object' 
        && typeof obj.length === 'number';
	};
	// Is an object a int
	bthtemplate.isInt = function (obj) {
    var re = /^\d+$/;
    return re.test(obj);
	};

	// Is an object a email address	
	bthtemplate.isEmail = function (obj) {
    if(isString(obj)){
        //return obj.match(/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/ig);
				return true;
    }else{
        return false;
    }
	};
	// Is an object a URL
	bthtemplate.isUrl = function (obj) {
    if(isString(obj)){
        var re = new RegExp("^(http|https)\://([a-zA-Z0-9\.\-]+(\:" +
            "[a-zA-Z0-9\.&%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|" +
            "[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2" +
            "[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\." +
            "(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|" +
            "[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]" +
            "{1}[0-9]{1}|[0-9])|localhost|([a-zA-Z0-9\-]+\.)*[a-zA-Z" +
            "0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name" +
            "|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-z" +
            "A-Z0-9\.\,\?\'\\\+&%\$#\=~_\-]+))*$");
        return obj.match(re);
    }else{
        return false;
    }
	};
  /**
   * Get the position of an element.
   * http://stackoverflow.com/questions/442404/dynamically-retrieve-html-element-x-y-position-with-javascript
   * @param el the element.
   */
  bthtemplate.getOffset = function ( el ) {
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
  return bthtemplate;
  
	})(window, window.document); 
/**
 * Create a menu for assignment 2
 *
 */
window.onload = function start() {
	assignmentTwoMenu("Tillbaka",'../');
	assignmentTwoMenu("Literal(u1)",'../literal');
	assignmentTwoMenu("u2(datatypes)",'../datatypes');
	assignmentTwoMenu("u3(strings)",'../strings');
	assignmentTwoMenu("u4(dicefunc)",'../dicefunc');
	assignmentTwoMenu("u5(pushingball)",'../pushingball');
	assignmentTwoMenu("u6(animate)",'../animate');
	assignmentTwoMenu("u7(boulddash)",'../boulderdash');
	assignmentTwoMenu("u8(roulette)",'../roulette');
	assignmentTwoMenu("u9(funktioner. i bthtemplate.js)",'../bthtemplate');
}
var assignmentTwoMenu = function (name,direction) {
	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = name;
	document.getElementById("menuAssignment2").appendChild(myButton);
	myButton.onclick = 	item = function () {location = direction;}
}
