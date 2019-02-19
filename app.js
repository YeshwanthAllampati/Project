$(document).ready(function(){
	
	
	$.ajax({
		url: "http://localhost/chartjs/data.php",
		method: "GET",
		success: function(data){
			
			console.log(data);
			
		},
		error: function(data){
			console.log(data);
		}		
	});
	
	
});