
<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body onload="ajaxget();">
<div class ="row">
<div class ="container" style ="width:900px;">

 <canvas id="myChart"></canvas>
 <div id="container"></div>
 
</div>
</div>


<script>
function ajaxget() {
    $.ajax({
        type:'get',
        url:'http://127.0.0.1:8000/chart/list',
        dataType:'Json',
        success: function (data) {
        
        
        //var content = document.getElementById("container")
        //content.innerHTML=data;


        var name =[];
        var vote =[];

        for (var i in data){
            name.push(data[i].name);
            vote.push(data[i].vote);
        }


        console.log(name);
        console.log(vote);

          

        

        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
        labels:
        
        name,        

        
        datasets: [{
            label: '# of Votes',
            data: 
            
              vote,
            
            backgroundColor: [						
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
            }]
            },
            options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: "食物大調查",
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
});






        }

    })

}


</script>
 
   
</body>
</html>



