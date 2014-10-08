// JavaScript Document
//Call function in mos.js
function setRandomNr(min, max) {
	document.getElementById("demo").innerHTML = bthtemplate.randomNr (min, max);
};
function timing() {
	document.getElementById("timing").innerHTML = bthtemplate.setStartStop ();
};
function unixtime() {
	document.getElementById("unixtime").innerHTML = bthtemplate.unixtime ();
};
function array() {
//	document.getElementById("test5").innerHTML = bthtemplate.randomNr (1, 4);	
//	alert(bthtemplate.al());
//	alert(bthtemplate.[1, 2, 3].contains(2)); // => true
 var  cars = new Array("blekinge","skåne","halland");
	alert(bthtemplate.contains(cars,"skåne"));
//	document.getElementById("test6").innerHTML = bthtemplate.contains(cars,"sasb");//bthtemplate.randomNr (1, 4);
//	alert([1, 2, 3].bthtemplate.contains(2)); 
};


/*
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
	placeHolder = document.getElementById("menuAssignment2");
	placeHolder.appendChild(myButton);
	myButton.onclick = 	item = function () {location = direction;}
}

*/
