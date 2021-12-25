<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="styl.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="chart.js"></script>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="uselo">	<i class="logo1 fas fa-user-circle"><span><h1>Hello,Admin</h1></span></i>
</div>
<section id="sidemenu">
	<img id="logo" src="sra.png">
	<nav>
		<a href="prospect.php"><i class="fa fa-dashboard"></i> Prospects</a>
	    <a href="dash.php"><i class="fas fa-shield-alt"></i> Dashboard</a>
 <a href="chart.php"><i class="fas fa-users"></i>Analytics</a>
      <a href="invoice.php"><i class="fas fa-users"></i>Invoices</a>
        <a href="Activation.php"><i class="far fa-file-alt"></i>Activation</a>

	</nav>
	<div style="margin-top: -237px;" id="panelbar">Chart<span style="color: #46494d;">/Overview</span></div>
<canvas style="position: absolute;left: 50%;top: 37%;width:1020px;height:1020px" id="mChart"  ></canvas>
<script>
var ctx = document.getElementById("mChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["uni", "bounce", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
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
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</body>
</html>