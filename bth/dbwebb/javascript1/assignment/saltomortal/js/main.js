			var i=0;
			var a=0;

			window.onload = function Start() {
				document.getElementById('headtext').innerHTML = '	document.getElementById('headtext').innerHTML = 'Javascript-programmering - Fredrik Stenberg';
				home();
			
			}
			function kmom01() {

				removeMenu();
				cali(1);

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
			}
			function source() {
 				location.href = 'sourcehtml.php';
			}
			function assignment1() {
 				location.href = 'assignment1.php';
			}
			function home() {
				removeMenu();

				cali(0);
	
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
						if(i==0)
							myButton.style.color="#BBB";
						placeHolder = document.getElementById("menu");
						placeHolder.appendChild(myButton);
						myButton.onclick = home;

						myButton = document.createElement("input");
						myButton.type = "button";
						myButton.value = "Kursmoment 1";
						if(i==1)
							myButton.style.color="#BBB";
						placeHolder = document.getElementById("menu");
						placeHolder.appendChild(myButton);
						myButton.onclick = kmom01;
			
						myButton = document.createElement("input");
						myButton.type = "button";
						myButton.value = "Source";
						placeHolder = document.getElementById("menu");
						placeHolder.appendChild(myButton);
						myButton.onclick = source;

						myButton = document.createElement("input");
						myButton.type = "button";
						myButton.value = "moment1(uppgift)";
						placeHolder = document.getElementById("menu");
						placeHolder.appendChild(myButton);
						myButton.onclick = assignment1;
}

