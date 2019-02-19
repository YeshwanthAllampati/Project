$(document).ready(function(){
	
	
	$.ajax({
		url: "http://localhost/Life/data.php",
		method: "GET",
		success: function(data){
			
			console.log(data);
			var branch= [];
			var perf= [];
			
			for(var i in data){
				branch.push(data[i].dept);
				perf.push(data[i].count);
				
			}
			
			var chartdata={
				labels: branch,
				datasets : [
				{
					
					label: 'Department Wise Performance',
					backgroundColor: 'rgba(200,200,200,0.75)',
					borderColor:  'rgba(200,200,200,0.75)',
					hoverBackgroundColor: 'rgba(200,200,200,1)',
					hoverBorderColor: 'rgba(200,200,200,1)',
					data: perf
					
					
				}
				
			]
			
			};
			
			var ctx = $("#mycanvas");
			
			var barGraph=new Chart(ctx,{
				
				type: 'bar',
				data: chartdata
				
				
			});
				
		},
		error: function(data){
			console.log(data);
		}		
	});
	
	
});