/**
 * menu for the template "mall" 
 *
 * @Fredrik Stenberg frsd14@student.bth.se
 */

var assignment;
/**
 *
 * Function loading with the webpage
 */
window.onload = function Start() 
	document.getElementById('headtext').innerHTML = 'Javascript-programmering - Fredrik Stenberg';
	home();
}

function kmom01() {
	removeMenu();
	cali("kmom01");
	/**
	 *
	 * Code that handles loading of the markdown-file to the page
	 */
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
function sourcehtml() {
	location.href = 'sourcehtml.php';
}
function assignment1() {
	location = 'saltomortal';
}
function home() {
	removeMenu();
	cali("home");
	/**
	 *
	 * Code that handles loading of the markdown-file to the page
	 */
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
/**
 *
 * Remove the element that creates the menu
 */
function removeMenu() {
	mydiv = document.getElementById('menu');
	while ( mydiv.firstChild )
		mydiv.removeChild( mydiv.firstChild );
}
/**
 *
 * Create the menu for the startposition
 */

function cali(i) {
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
}
/**
 *
 * Click assignment(Moment 1)-button
 */
function assignment() {
	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = "Uppgift";
	placeHolder = document.getElementById("menu");
	placeHolder.appendChild(myButton);
	myButton.onclick = assignment1;
}
/**
 *
 * Click Source-button
 */
function source() {
	myButton = document.createElement("input");
	myButton.type = "button";
	myButton.value = "Source";
	placeHolder = document.getElementById("menu");
	placeHolder.appendChild(myButton);
	myButton.onclick = sourcehtml;
}
