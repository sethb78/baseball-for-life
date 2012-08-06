$(".vote").click(function(){
var element = $(this);
var Id = element.attr("id");
var dataString = 'id='+ Id;
$("#loading").show();
$("#loading").fadeIn(400).html('<img src="loading.gif" border="0" align="absmiddle"> loading.....');
$.ajax({
type: "POST",
url: "poll_vote.php",
data: dataString,
cache: false,
success: function(html){
$("#show").append(html);
$("#loading").hide();
$("#hide").hide();
}
});
return false;});});