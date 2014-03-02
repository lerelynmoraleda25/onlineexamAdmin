$(function(){
       $("#loginbtn").click(function(){
       	if($("#logemail").val()=="" || $("#logpassword").val()=="")
       		$("#warning").html("Please enter both username and password");
       	else
       		$.post($("#logForm").attr("action"),
       			$("#logForm :input").serializeArray(),
       			function(data){
       				$("#warning").html(data);
       			});
       		$("#logForm").submit(function(){
       			return false;
       		});
       });
    
});


