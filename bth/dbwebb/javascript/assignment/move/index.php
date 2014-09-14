<?php $title='BTH - Javascript - Uppgift'; include(__DIR__ . '/../../mall/header.php'); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/main.js"></script>
<div>
	<button onclick="location ='../'">Tillbaka</button>
	<button onclick="location ='../saltomortal'">Saltomortal</button>
	<button onclick="location ='../resize'">Ändra storlek på div-element</button>
	<button onclick="location =''">Flytta</button>
</div>		

<div id='flash'>
Hi, I'm a baddie, my name is "Mickey Mos", click to move me or just move me with the keys arrows, space, h, b, f, r. Have fun!
<div id='b1' class='baddie down'></div>
</div>

 
<?php $path=__DIR__; include(__DIR__ . '/../../mall/footer.php'); ?>
