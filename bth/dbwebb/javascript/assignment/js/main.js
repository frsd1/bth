/**
 * menu for the template "mall" 
 *
 * @Fredrik Stenberg frsd14@student.bth.se
 */

var assignment;

window.onload = function Start() {
	document.getElementById('headtext').innerHTML = 'Javascript-programmering - Fredrik Stenberg';
	home();
}

var assignmentmom;

function GetAssignment() {
	return assignmentmom;
}

function kmom01() {
	removeMenu();
	addButton("kmom01");
	assignmentmom=assignment1
	Ext.onReady(function () {
		var textToDisplay="markdown/kmom01.md";
	        var converter = new Markdown.Converter(),
                /* Alias the conversion method to make it easier to swap libraries in the future. */
                markdownToHtml = converter.makeHtml;
            	Ext.fly("text").load({
                	"url": textToDisplay,
                	"renderer": function (ldr, res, req) {
                    	ldr.getTarget().update(markdownToHtml(res.responseText));
                }
            });
        });
	assignment();
}
function kmom02() {
	removeMenu();
	addButton("kmom02");
	assignmentmom=assignment2
	Ext.onReady(function () {
		var textToDisplay="markdown/kmom02.md";
	        var converter = new Markdown.Converter(),
                /* Alias the conversion method to make it easier to swap libraries in the future. */
                markdownToHtml = converter.makeHtml;
            	Ext.fly("text").load({
                	"url": textToDisplay,
                	"renderer": function (ldr, res, req) {
                    	ldr.getTarget().update(markdownToHtml(res.responseText));
                }
            });
        });
	assignment();
}
function kmom03() {
	removeMenu();
	addButton("kmom03");
	assignmentmom=assignment3
	Ext.onReady(function () {
		var textToDisplay="markdown/kmom03.md";
	        var converter = new Markdown.Converter(),
                /* Alias the conversion method to make it easier to swap libraries in the future. */
                markdownToHtml = converter.makeHtml;
            	Ext.fly("text").load({
                	"url": textToDisplay,
                	"renderer": function (ldr, res, req) {
                    	ldr.getTarget().update(markdownToHtml(res.responseText));
                }
            });
        });
	assignment();
}

function kmom04() {
	removeMenu();
	addButton("kmom04");
	assignmentmom=assignment4
	Ext.onReady(function () {
		var textToDisplay="markdown/kmom04.md";
	        var converter = new Markdown.Converter(),
                /* Alias the conversion method to make it easier to swap libraries in the future. */
                markdownToHtml = converter.makeHtml;
            	Ext.fly("text").load({
                	"url": textToDisplay,
                	"renderer": function (ldr, res, req) {
                    	ldr.getTarget().update(markdownToHtml(res.responseText));
                }
            });
        });
	assignment();
}

function sourcehtml() {
	location.href = 'sourcehtml.php';
}

function assignment1() {
	location = 'saltomortal';
}
function assignment2() {
	location = 'literal';
}
function assignment3() {
	location = 'corejavascript';
}
function assignment4() {
	location = 'corejavascript';
}

function home() {
	removeMenu();
	addButton("home");
	Ext.onReady(function () {
		var tt="markdown/me.md";
	        var converter = new Markdown.Converter(),
                /* Alias the conversion method to make it easier to swap libraries in the future. */
                markdownToHtml = converter.makeHtml;
            		Ext.fly("text").load({
                		"url": tt,
                		"renderer": function (ldr, res, req) {
                    		ldr.getTarget().update(markdownToHtml(res.responseText));
                	}
            });
        }); 
	source();  
}   

function removeMenu() {
	mydiv = document.getElementById('menu');
	while ( mydiv.firstChild )
		mydiv.removeChild( mydiv.firstChild );
}
			
function addButton(i) {
	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = "Hem";
	if(i=="home")
		myButton.style.color="#BBB";
	placeHolder = document.getElementById("menu");
	placeHolder.appendChild(myButton);
	myButton.onclick = home;
	
	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = "Moment 1";
	if(i=="kmom01")
		myButton.style.color="#BBB";
	placeHolder = document.getElementById("menu");
	placeHolder.appendChild(myButton);
	myButton.onclick = kmom01;	
		
	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = "Moment 2";
	if(i=="kmom02")
		myButton.style.color="#BBB";
	placeHolder = document.getElementById("menu");
	placeHolder.appendChild(myButton);
	myButton.onclick = kmom02;			
	/*
	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = "Moment 3";
	if(i=="kmom03")
		myButton.style.color="#BBB";
	placeHolder = document.getElementById("menu");
	placeHolder.appendChild(myButton);
	myButton.onclick = kmom03;			

	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = "Moment 4";
	if(i=="kmom04")
		myButton.style.color="#BBB";
	placeHolder = document.getElementById("menu");
	placeHolder.appendChild(myButton);
	myButton.onclick = kmom04;			
	*/
	
}
function assignment() {
	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = "Uppgift";
	placeHolder = document.getElementById("menu");
	placeHolder.appendChild(myButton);
	myButton.onclick =  GetAssignment();
}
function source() {
	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = " Source";
	placeHolder = document.getElementById("menu");
	placeHolder.appendChild(myButton);
	myButton.onclick = sourcehtml;
}

