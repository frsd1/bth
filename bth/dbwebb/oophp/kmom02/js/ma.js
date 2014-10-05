/*
var start=false;
window.onload = function Start() {
	document.getElementById("m2").style.display="none";
}

function showhide(i)
{
	if(start){
	if(i==1) {
		document.getElementById("m2").style.display="none";
		document.getElementById("m1").style.display = "block";
	}
	}
	if(i==2) {
		document.getElementById("m1").style.display="none";
		var div = document.getElementById("m2");
		document.getElementById("m2").style.display = "block";
	start=true;
	}
}
*/
$(document).ready(function(){
  $("#oneform").show();
  $("#twoform").hide();
 
  $("#twoplayer").click(function(){
    $("#oneform").hide();
	  $("#twoform").show();
  });
	$("#oneplayer").click(function(){
    $("#oneform").show();
	  $("#twoform").hide();
  });
});
