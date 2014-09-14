<?php $title='BTH - Javascript - Uppgift'; include(__DIR__ . '/../../mall/header.php'); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/resize.js"></script>

<div>
	<button onclick="location ='../'">Tillbaka</button>
	<button onclick="location ='../saltomortal'">Saltomortal</button>
	<button onclick="location =''">Ändra storlek på div-element</button>
	<button onclick="location ='../move'">Flytta</button>
</div>		


<div id='flash'>
<form id='size'>
<p>
  <label>Width: <input id='width' type='number' /></label> 
  <label>Height: <input id='height' type='number' /></label> 
  <input id='resize' type='button' value='Resize' />
</p>
</div>
 
<?php $path=__DIR__; include(__DIR__ . '/../../mall/footer.php'); ?>
