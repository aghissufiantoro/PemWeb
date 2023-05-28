<?php
include('conn.php');
// Total Kasus
$negara = mysqli_query($conn, "SELECT * FROM tb_covid19");
while ($row = mysqli_fetch_array($negara)) {
    $country_name[] = $row['negara'];
    // Mengambil data di tb_covid19
    $query = mysqli_query($conn, "SELECT totalcases FROM tb_covid19 WHERE id_covid='" . $row['id_covid'] . "'");
    $row = $query->fetch_array();
    $totalcases[] = $row['totalcases'];
}
// Total kematian
$negara = mysqli_query($conn, "SELECT * FROM tb_covid19");
while ($row = mysqli_fetch_array($negara)) {
    $country_name[] = $row['negara'];
    // Mengambil data di tb_covid19
    $query = mysqli_query($conn, "SELECT totaldeaths FROM tb_covid19 WHERE id_covid='" . $row['id_covid'] . "'");
    $row = $query->fetch_array();
    $totaldeath[] = $row['totaldeaths'];
}

// Total Sembuh
$negara = mysqli_query($conn, "SELECT * FROM tb_covid19");
while ($row = mysqli_fetch_array($negara)) {
    $country_name[] = $row['negara'];
    // Mengambil data di tb_covid19
    $query = mysqli_query($conn, "SELECT totalrecovered FROM tb_covid19 WHERE id_covid='" . $row['id_covid'] . "'");
    $row = $query->fetch_array();
    $totalrecovered[] = $row['totalrecovered'];
}

// Kasus Aktif
$negara = mysqli_query($conn, "SELECT * FROM tb_covid19");
while ($row = mysqli_fetch_array($negara)) {
    $country_name[] = $row['negara'];
    // Mengambil data newcases pada tb_covid19
    $query = mysqli_query($conn, "SELECT activecases FROM tb_covid19 WHERE id_covid='" . $row['id_covid'] . "'");
    $row = $query->fetch_array();
    $activecases[] = $row['activecases'];
}

// Total Tes
$negara = mysqli_query($conn, "SELECT * FROM tb_covid19");
while ($row = mysqli_fetch_array($negara)) {
    $country_name[] = $row['negara'];
    // Mengambil data newcases pada tb_covid19
    $query = mysqli_query($conn, "SELECT totaltests FROM tb_covid19 WHERE id_covid='" . $row['id_covid'] . "'");
    $row = $query->fetch_array();
    $totaltest[] = $row['totaltests'];
}
?>

<!-- Desain Grafik -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Cases</title>
    <script type="text/javascript" src="/doughnut/Chart.js"></script>
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

    <script>
        var config = {
            type : 'doughnut',
            data : {
                datasets: [{
                    label : 'Total Kasus Covid-19',
                    data:<?php echo json_encode($totalcases); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],
					label: 'Persentase Total Cases COVID-19'
				}],
				labels: <?php echo json_encode($negara); ?>},
			options: {
				responsive: true
			}
		};

		var config2 = {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($totaldeath); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],
					label: 'Persentase Total Cases COVID-19'
				}],
				labels: <?php echo json_encode($negara); ?>},
			options: {
				responsive: true
			}
		};
		var config3 = {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($newrecovered); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],
					label: 'Persentase Total Cases COVID-19'
				}],
				labels: <?php echo json_encode($negara); ?>},
			options: {
				responsive: true
			}
		};
		var config4 = {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($activecases); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],
					label: 'Persentase Total Cases COVID-19'
				}],
				labels: <?php echo json_encode($country_name); ?>},
			options: {
				responsive: true
			}
		};
		var config5 = {
			type: 'doughnut',
			data: {
				datasets: [{
					data:<?php echo json_encode($totalrecovered); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(0, 0, 205, 0.2)',
					'rgba(40, 178, 170, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(0, 255, 254, 1)',
					'rgba(115, 255, 216, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(0, 0, 205, 1)',
					'rgba(40, 178, 170, 1)'
					],
					label: 'Persentase Total Cases COVID-19'
				}],
				labels: <?php echo json_encode($country_name); ?>},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			var ctx2 = document.getElementById('chart-area2').getContext('2d');
			var ctx3 = document.getElementById('chart-area3').getContext('2d');
			var ctx4 = document.getElementById('chart-area4').getContext('2d');
			var ctx5 = document.getElementById('chart-area5').getContext('2d');
			window.myPie = new Chart(ctx, config);
			window.myPie2 = new Chart(ctx2, config2);
			window.myPie3 = new Chart(ctx3, config3);
			window.myPie4= new Chart(ctx4, config4);
			window.myPie5 = new Chart(ctx5, config5);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
			window.myPie2.update();
			window.myPie3.update();
			window.myPie4.update();
			window.myPie5.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myPie.update();
			window.myPie2.update();
			window.myPie3.update();
			window.myPie4.update();
			window.myPie5.update();
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myPie.update();
			window.myPie2.update();
			window.myPie3.update();
			window.myPie4.update();
			window.myPie5.update();

		});
	</script>
</body>
</html>