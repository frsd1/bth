<?php $title='BTH - Javascript - Uppgift'; include(__DIR__ . '/../../mall/header.php'); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/ma.js"></script>
<div>
	<button onclick="location ='../'">Tillbaka</button>
	<button onclick="location ='../saltomortal'">U1</button>
	<button onclick="location ='../resize'">U2</button>
	<button onclick="location =''">this</button>
</div>		

<div id='flash'>
<p id='text' class='red'>Hi, hi this text should be replaced when page and DOM is loaded.</p>
</div>

 
<?php $path=__DIR__; include(__DIR__ . '/../../mall/footer.php'); ?>
