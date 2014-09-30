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


<div id='flash'>
<p id='text' class='red'>Hi this text should be replaced when page and DOM is loaded.</p>

<div id='table'></div>
<div id='status'>
<form>
<label>Bankroll: <input id='bankroll' type='number' value='100' /></label>
<label>Bet: <input id='bet' type='number' value='10' /></label>
<label>Color: 
<select id='color'>
<option value='green'>Green</option>
<option value='red'>Red</option>
<option value='black'>Black</option>
</select>
</label>
<input id='button' type='button' value='Roll' />
</div>
<div id='log'></div>
<br><br><br><br><br>
<br><br><br><br><br>

 
<?php $path=__DIR__; include(__DIR__ . '/../../mall/footer.php'); ?>
