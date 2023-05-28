<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doughnut Chart</title>
    <script src="Chart.js" type="text/javascript"></script>
</head>

<body>
    <div id="canvas-holder" style="width: 50%;">
        <h1>Total Kasus COVID-19</h1>
        <canvas id="chart-area"></canvas>
        <h1>Total Kematian</h1>
        <canvas id="chart-area2"></canvas>
        <h1>Total Sembuh</h1>
        <canvas id="chart-area3"></canvas>
        <h1>Total Kasus Aktif</h1>
        <canvas id="chart-area4"></canvas>
        <h1>Total Tes COVID-19</h1>
        <canvas id="chart-area5"></canvas>
    </div>

    <Script type="text/javascript">
        var ctx = document.getElementById("doughnutchart").getContext("2d");
        var donat1 = {
            label: [<?php while ($p = mysqli_fetch_array($negara)) { echo '"' . $p['negara'] . '",';}?>],
            datasets: [
            {
            data: [<?php while ($p = mysqli_fetch_array($jumlah)) { echo '"' . $p['totalcases'] . '",';}?>],
            backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
                    'rgba(133, 196, 155, 0.2)',
                    'rgba(93, 33, 148, 0.2)',
                    'rgba(117, 48, 15, 0.2)',
                    'rgba(20, 4, 160, 0.2)',
                    'rgba(234, 214, 77, 0.2)',
                    'rgba(50, 96, 17, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
                    'rgba(133, 196, 155, 1)',
                    'rgba(93, 33, 148, 1)',
                    'rgba(117, 48, 15, 1)',
                    'rgba(20, 4, 160, 1)',
                    'rgba(234, 214, 77, 1)',
                    'rgba(50, 96, 17, 1)'
					],
                    label: 'Presentase Kasus Covid-19',
            }
            ]
            };

            var mydoughnutchart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true
                }
            });
    </Script>
</body>

</html>