$(document).ready(function(){

$(".category").click(function(){
	$.ajax({
    type: "GET",
    url: "ajaxDump.php",
	data: {type: "echoItems", category: $(this).text()},
	error: function() {alert("Failure");},
	success: function(out) {$("#itemDisplay").html(out);}
	});	
});
})