<?php $title='BTH - Javascript - Uppgift'; include(__DIR__ . '/../../mall/header.php'); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div>
	<button onclick="location ='../'">Tillbaka</button>
	<button onclick="location ='../literal'">U1(literal)</button>
	<button onclick="location ='../datatypes'">U2(datatypes)</button>
	<button onclick="location ='../strings'">U3(strings)</button>
	<button onclick="location ='../dicefunc'">U4(dicefunc)</button>
	<button onclick="location ='../pushingball'">U5(pushingball)</button>
	<button onclick="location ='../animate'">U6(animate)</button>
	<button onclick="location ='../boulderdash'">U7(boulddash)</button>
	<button onclick="location ='../roulette'">U8(roulette)</button>
	<button onclick="location ='../mosextra'">U9(Ett par extra funk. i mos.js)</button>
</div>		

<div id='flash2'>
<p>Click the button to trigger a function.</p>
<button onclick="setRandomNr(1,4)">Click me</button>
<p id="demo"></p>
</div>

<div id='flash3'>
<p>Click the button to trigger a function.</p>
<button onclick="timing()">Click me</button>
<p id="timing"></p>
</div>


 
<?php $path=__DIR__; include(__DIR__ . '/../../mall/footer.php'); ?>
