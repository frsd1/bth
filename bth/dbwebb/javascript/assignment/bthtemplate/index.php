<?php $title='BTH - Javascript - Uppgift'; include(__DIR__ . '/../../mall/header.php'); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div id='menuAssignment2'></div>

<div id='flash'>
<p>Testar setRandomNr(min,max) som returnerar ett slumptal mellan min max.</p>
<button onclick="setRandomNr(1,4)">Klick</button>
<p id="demo"></p>

<p>Testar timing() som returnerar tiden mellan två knapptryck.</p>
<button onclick="timing()">Klick</button>
<p id="timing"></p>

<p>Returnerar unix-time</p>
<button onclick="unixtime()">Klick</button>
<p id="unixtime"></p>

<p>Testar om en text finns på en position i en array. <br />Exempel<br /> var  landskap = new Array("Blekinge","Skåne","Halland");<br />
	alert(bthtemplate.contains(landskap,"Skåne"));<br />
Alertboxen returnerar True eftersom texten "Skåne" finns i arrayen.
</p>
<button onclick="array()">Klick</button>
<p id="array"></p>

<!---
<p>Click the button to trigger a function.</p>
<button onclick="test3()">Click me</button>
<p id="test3"></p>
<p>Click the button to trigger a function.</p>
<button onclick="test4()">Click me</button>
<p id="test4"></p>


<p>Is email tion.</p>
<button onclick="test5()">Click me</button>
<p id="test5"></p>

<p>Array test.</p>
<button onclick="test6()">Click me</button>
<p id="test6"></p>
-->


</div>

 
<?php $path=__DIR__; include(__DIR__ . '/../../mall/footer.php'); ?>
