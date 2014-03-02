$(function(){

$("#reg").click(function(){
	if($("#email").val()=="" || 
	   $("#password").val()=="" ||
	   $("#password").val() != $("#confirm_pass").val())
		
		$("#ack").html("username and password are mandatory \n Please enter")
	else if($("#fname").val() == "")
		$("#ack").html("Please complete all fields")
	else
		$.post($("#regForm").attr("action"),
			$("#regForm :input").serializeArray(),
			function(info){
				$("#ack").empty();
				$("#ack").html(info);
				clear();
			});
	$("#regForm").submit(function(){
		return false;
	});
	
});

function clear(){
	$("#regForm :input").each(function(){
		$(this).val("");
		
	});
}
});

