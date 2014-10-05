// JavaScript Document
//Call function in mos.js
function setRandomNr(min, max) {
	document.getElementById("demo").innerHTML = randomNr (min, max);
};
function timing() {
	document.getElementById("timing").innerHTML = setStartStop ();
};
function test1() {
	document.getElementById("test1").innerHTML = Template.random(1, 6);
};
function test2() {
	document.getElementById("test2").innerHTML = Template.getUnixtime(1, 6);
};
function test3() {
	document.getElementById("test3").innerHTML = bthtemplate.random(1, 6);
};
function test4() {
	document.getElementById("test4").innerHTML = bthtemplate.getUnixtime(1, 6);
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
