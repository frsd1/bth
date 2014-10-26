$(document).ready(function(){
  $("#hidden").hide();
 
  $("#content").click(function(){
    $("#hidden").show();

  });
  $("#doSave").click(function(){
    $("#hidden").hidden();

  });
});
