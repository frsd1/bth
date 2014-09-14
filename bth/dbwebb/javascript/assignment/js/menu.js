			var i=0;
			var a=0;
			var assignment;

			window.onload = function Start() {
				document.getElementById('headtext').innerHTML = 'Javascript-programmering - Fredrik Stenberg';
				home();
			
			
			}
			function kmom01() {

				removeMenu();
				cali("kmom01");

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
			
			
/*
						myButton = document.createElement("input");
						myButton.type = "button";
						myButton.value = "moment1(uppgift)";
						placeHolder = document.getElementById("menu");
						placeHolder.appendChild(myButton);
						myButton.onclick = assignment1;
*/
}
	function assignment() {

						myButton = document.createElement("input");
						myButton.type = "button";
						myButton.value = "Uppgift";
						placeHolder = document.getElementById("menu");
						placeHolder.appendChild(myButton);
						myButton.onclick = assignment1;
}
	function source() {
		myButton = document.createElement("input");
		myButton.type = "button";
		myButton.value = "Source";
		placeHolder = document.getElementById("menu");
		placeHolder.appendChild(myButton);
						myButton.onclick = sourcehtml;
			

}

