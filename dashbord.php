<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Admin panel</title>
	<script>
    window.addEventListener('DOMContentLoaded', (event) => {
      // Get today's date
      const today = new Date().toISOString().split('T')[0];

      // Set the default date
      document.getElementById('dateField').value = today;
	  document.getElementById('dateField1').value = today;
	  document.getElementById('dateField2').value = today;
	  document.getElementById('dateField3').value = today;
	  document.getElementById('dateField4').value = today;
    });	
  </script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <style>
   .select1
{
	paddiing:20px;
	margin-left:570px;
	font-size:15px;
	width:95px;
	height:20px;
	border-radius:6px;
}
.cal1
{	
	margin:1px 0px 0px 5px;
	text-align:center;
	font-size:15px;
	width:110px;
	height:20px;
}
</style>
</head>
<body>


<?php
$con = new mysqli('localhost', 'root', '', 'admin');

$labelsDay = [];
$dataDay = [];
$labelsMonth = [];
$dataMonth = [];
$labelsYear = [];
$dataYear = [];

$queryDay = $con->query("SELECT DATE_FORMAT(enqdate, '%d-%m-%Y') AS interval_value, COUNT(id) AS total_count
FROM db_enq
GROUP BY DATE_FORMAT(enqdate, '%d-%m-%Y')
ORDER BY enqdate DESC
LIMIT 5;");
foreach ($queryDay as $row) {
    $labelsDay[] = $row['interval_value'];
    $dataDay[] = $row['total_count'];
}

$queryMonth = $con->query("SELECT DATE_FORMAT(enqdate, '%m-%Y') AS interval_value, COUNT(id) AS total_count
FROM db_enq
GROUP BY DATE_FORMAT(enqdate, '%m-%Y')
ORDER BY STR_TO_DATE(CONCAT('01-', DATE_FORMAT(enqdate, '%m-%Y')), '%d-%m-%Y') ASC
LIMIT 5;");
foreach ($queryMonth as $row) {
    $labelsMonth[] = $row['interval_value'];
    $dataMonth[] = $row['total_count'];
}

$queryYear = $con->query("SELECT DATE_FORMAT(enqdate, '%Y') AS interval_value, COUNT(id) AS total_count FROM db_enq GROUP BY DATE_FORMAT(enqdate, '%Y')");
foreach ($queryYear as $row) {
    $labelsYear[] = $row['interval_value'];
    $dataYear[] = $row['total_count'];
}
?>


<?php
$con = new mysqli('localhost', 'root', '', 'admin');

$labelsDay1 = [];
$dataDay1 = [];
$labelsMonth2 = [];
$dataMonth2 = [];
$labelsYear3 = [];
$dataYear3 = [];

$queryDay = $con->query("SELECT DATE_FORMAT(quotedate, '%d-%m-%Y') AS interval_value, COUNT(id) AS total_count
FROM db_quote
GROUP BY DATE_FORMAT(quotedate, '%d-%m-%Y')
ORDER BY quotedate DESC
LIMIT 5;");
foreach ($queryDay as $row) {
    $labelsDay1[] = $row['interval_value'];
    $dataDay1[] = $row['total_count'];
}

$queryMonth = $con->query("SELECT DATE_FORMAT(quotedate, '%m-%Y') AS interval_value, COUNT(id) AS total_count
FROM db_quote
GROUP BY DATE_FORMAT(quotedate, '%m-%Y')
ORDER BY STR_TO_DATE(CONCAT('01-', DATE_FORMAT(quotedate, '%m-%Y')), '%d-%m-%Y') ASC
LIMIT 5;");
foreach ($queryMonth as $row) {
    $labelsMonth2[] = $row['interval_value'];
    $dataMonth2[] = $row['total_count'];
}

$queryYear = $con->query("SELECT DATE_FORMAT(quotedate, '%Y') AS interval_value, COUNT(id) AS total_count FROM db_quote GROUP BY DATE_FORMAT(quotedate, '%Y')");
foreach ($queryYear as $row) {
    $labelsYear3[] = $row['interval_value'];
    $dataYear3[] = $row['total_count'];
}
?>


<?php
$con = new mysqli('localhost', 'root', '', 'admin');

$labelsDay4 = [];
$dataDay4 = [];
$labelsMonth5 = [];
$dataMonth5 = [];
$labelsYear6 = [];
$dataYear6 = [];

$queryDay = $con->query("SELECT DATE_FORMAT(oadate, '%d-%m-%Y') AS interval_value, COUNT(id) AS total_count
FROM db_oa
GROUP BY DATE_FORMAT(oadate, '%d-%m-%Y')
ORDER BY oadate DESC
LIMIT 5;");
foreach ($queryDay as $row) {
    $labelsDay4[] = $row['interval_value'];
    $dataDay4[] = $row['total_count'];
}

$queryMonth = $con->query("SELECT DATE_FORMAT(oadate, '%m-%Y') AS interval_value, COUNT(id) AS total_count
FROM db_oa
GROUP BY DATE_FORMAT(oadate, '%m-%Y')
ORDER BY STR_TO_DATE(CONCAT('01-', DATE_FORMAT(oadate, '%m-%Y')), '%d-%m-%Y') ASC
LIMIT 5;");
foreach ($queryMonth as $row) {
    $labelsMonth5[] = $row['interval_value'];
    $dataMonth5[] = $row['total_count'];
}

$queryYear = $con->query("SELECT DATE_FORMAT(oadate, '%Y') AS interval_value, COUNT(id) AS total_count FROM db_oa GROUP BY DATE_FORMAT(oadate, '%Y')");
foreach ($queryYear as $row) {
    $labelsYear6[] = $row['interval_value'];
    $dataYear6[] = $row['total_count'];
}
?>


<?php
$con = new mysqli('localhost', 'root', '', 'admin');

$labelsDay7 = [];
$dataDay7 = [];
$labelsMonth8 = [];
$dataMonth8 = [];
$labelsYear9 = [];
$dataYear9 = [];

$queryDay = $con->query("SELECT DATE_FORMAT(oadate, '%d-%m-%Y') AS interval_value, COUNT(id) AS total_count
FROM db_invoice
GROUP BY DATE_FORMAT(oadate, '%d-%m-%Y')
ORDER BY oadate DESC
LIMIT 5;");
foreach ($queryDay as $row) {
    $labelsDay7[] = $row['interval_value'];
    $dataDay7[] = $row['total_count'];
}

$queryMonth = $con->query("SELECT DATE_FORMAT(oadate, '%m-%Y') AS interval_value, COUNT(id) AS total_count
FROM db_invoice
GROUP BY DATE_FORMAT(oadate, '%m-%Y')
ORDER BY STR_TO_DATE(CONCAT('01-', DATE_FORMAT(oadate, '%m-%Y')), '%d-%m-%Y') ASC
LIMIT 5;");
foreach ($queryMonth as $row) {
    $labelsMonth8[] = $row['interval_value'];
    $dataMonth8[] = $row['total_count'];
}

$queryYear = $con->query("SELECT DATE_FORMAT(oadate, '%Y') AS interval_value, COUNT(id) AS total_count FROM db_invoice GROUP BY DATE_FORMAT(oadate, '%Y')");
foreach ($queryYear as $row) {
    $labelsYear9[] = $row['interval_value'];
    $dataYear9[] = $row['total_count'];
}
?>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <h2>ADMIN</h2>
            </div>
            <div class="search">
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
            </div>
			<form action=method=post>
            <input class="date1" type=date id="dateField" name="" value="">
			</form> 
            <div class="user">
                <img src="admin.png" alt="">
            </div>
        </div>
        <div class="sidebar">
                        <ul>
                <li >
                    <a href="dashbord.php">
                        <i class="fas fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                
            </ul>
			<ul>
                <li >
                    <a  href="Index (1) Enq.php">
                        <i class="fas fa-address-card"></i>
                        <div>Enquiry</div>
                    </a>
                </li>
                
            </ul>
			<ul>
                <li >
                    <a  href="Quotation.php">
                        <i class="fa fa-list-alt"></i>
                        <div>Quotations</div>
                    </a>
                </li>
                
            </ul>
			<ul>
                <li >
                    <a  href="OA.php">
                        <i class="fas fa-file-invoice"></i>
                        <div>OA</div>
                    </a>
                </li>
                
            </ul>
			<ul>
                <li class="active" >
                    <a  href="Invoice.php">
                        <i class="fas fa-cart-arrow-down"></i>
                        <div>Invoice</div>
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="main">
		<h1 id="Admin" align="center">
		<marquee>Sale Management Admin Panel</marquee>
		</h1>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">68</div>
                        <div class="card-name">Today Enquiry</div>
                    </div>
                    <div class="icon-box1">
                        <i class="fas fa-address-card"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">45</div>
                        <div class="card-name">Today Quotations</div>
                    </div>
                    <div class="icon-box2">
                        <i class="fa fa-list-alt"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <div class="card-name">Today OA</div>
                    </div>
                    <div class="icon-box3">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">42</div>
                        <div class="card-name">Today Invoice</div>
                    </div>
                    <div class="icon-box4">
                        <i class="fas fa-cart-arrow-down"></i>
                    </div>
                </div>
            </div>
			
            <div class="charts">
                <div class="chart">
				 <h2>Today Enquiry</h2>
		
	            <form><input type=date  class="cal1" name="" value="">To
			<input type=date class="cal1" id="dateField1" name="" value=""></form>   	
	<select class="select1" id="timeInterval1">
    <option value="day">select</option>
    <option value="day">Day</option>
    <option value="month">Month</option>
    <option value="year">Year</option>
</select>

<div id="right">
    <button class="btn1" id="right1" onclick="showCombinedGraph1(1)">Bar Graph</button>
    <button class="btn2" id="right1" onclick="showCombinedGraph1(2)">Line Graph</button>
    <button class="btn3" id="right1" onclick="showCombinedGraph1(3)">Histogram</button>
    <button class="btn4" id="right1" onclick="showCombinedGraph1(4)">Line Chart</button>
</div>

<div id="combinedGraphContainer" style="width: 80%; margin: auto;">
    <canvas id="combinedGraphCanvas1" width="400" height="400"></canvas>
</div>

<script>
var combinedChart1;
var currentInterval1 = 'day';

function getCurrentData1() {
    if (currentInterval1 === 'day') {
        return <?php echo json_encode($dataDay)?>;
    } else if (currentInterval1 === 'month') {
        return <?php echo json_encode($dataMonth)?>;
    } else if (currentInterval1 === 'year') {
        return <?php echo json_encode($dataYear)?>;
    }
}

function getCurrentLabels1() {
    if (currentInterval1 === 'day') {
        return <?php echo json_encode($labelsDay)?>;
    } else if (currentInterval1 === 'month') {
        return <?php echo json_encode($labelsMonth)?>;
    } else if (currentInterval1 === 'year') {
        return <?php echo json_encode($labelsYear)?>;
    }
}

function showCombinedGraph1(graphNum) {
    var canvas = document.getElementById('combinedGraphCanvas1');
    var ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    if (combinedChart1) {
        combinedChart1.destroy();
    }

    var labels = getCurrentLabels1();
    var datasets = [];

    if (graphNum === 1) {
        datasets.push({
            label: 'Day-wise Data',
            data: getCurrentData1(),
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            type: 'bar'
        });
    } else if (graphNum === 2) {
        datasets.push({
            label: 'Month-wise Data',
            data: getCurrentData1(),
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false,
            type: 'line'
        });
    } else if (graphNum === 3) {
        datasets.push({
            label: 'Year-wise Data',
            data: getCurrentData1(),
            backgroundColor: 'rgba(153, 102, 255, 0.6)',
            borderWidth: 1,
            type: 'bar'
        });
    } else if (graphNum === 4) {
        datasets.push({
            label: 'Year-wise Data',
            data: getCurrentData1(),
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 2,
            fill: false,
            type: 'line'
        });
    }

    var data = {
        labels: labels,
        datasets: datasets
    };

    var options = {
        responsive: true,
        maintainAspectRatio: false,
        // ... Rest of your options
    };

    combinedChart1 = new Chart(ctx, {
        type: 'bar', // You can set the initial type here
        data: data,
        options: options
    });
}

document.getElementById('timeInterval1').addEventListener('change', function () {
    currentInterval1 = this.value;
 	updateGraph1();
});
function updateGraph1() {
        showCombinedGraph1(1); // Show initial graph
    }
updateGraph1();
</script>
                </div>
				
				
				<div class="chart">
				 <h2> Todays Quotations</h2>
		
	            <form><input type=date  class="cal1" name="" value="">To
			<input type=date class="cal1" id="dateField2" name="" value=""></form>   	
	<select class="select1" id="timeInterval2">
	<option value="day">select	</option>
    <option value="day">Day</option>
    <option value="month">Month</option>
    <option value="year">Year</option>
</select>

<div id="right">
    <button class="btn1" id="right1" onclick="showCombinedGraph2(1)">Bar Graph</button>
    <button class="btn2" id="right1" onclick="showCombinedGraph2(2)">Line Graph</button>
    <button class="btn3" id="right1" onclick="showCombinedGraph2(3)">Histogram</button>
    <button class="btn4" id="right1" onclick="showCombinedGraph2(4)">Line Chart</button>
</div>

<div id="combinedGraphContainer" style="width: 80%; margin: auto;">
    <canvas id="combinedGraphCanvas2" width="400" height="400"></canvas>
</div>

<script>
var combinedChart2;
var currentInterval2 = 'day';

function getCurrentData2() {
    if (currentInterval2 === 'day') {
        return <?php echo json_encode($dataDay1)?>;
    } else if (currentInterval2 === 'month') {
        return <?php echo json_encode($dataMonth2)?>;
    } else if (currentInterval2 === 'year') {
        return <?php echo json_encode($dataYear3)?>;
    }
}

function getCurrentLabels2() {
    if (currentInterval2 === 'day') {
        return <?php echo json_encode($labelsDay1)?>;
    } else if (currentInterval2 === 'month') {
        return <?php echo json_encode($labelsMonth2)?>;
    } else if (currentInterval2 === 'year') {
        return <?php echo json_encode($labelsYear3)?>;
    }
}

function showCombinedGraph2(graphNum) {
    var canvas = document.getElementById('combinedGraphCanvas2');
    var ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    if (combinedChart2) {
        combinedChart2.destroy();
    }

    var labels = getCurrentLabels2();
    var datasets = [];

    if (graphNum === 1) {
        datasets.push({
            label: 'Day-wise Data',
            data: getCurrentData2(),
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            type: 'bar'
        });
    } else if (graphNum === 2) {
        datasets.push({
            label: 'Month-wise Data',
            data: getCurrentData2(),
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false,
            type: 'line'
        });
    } else if (graphNum === 3) {
        datasets.push({
            label: 'Year-wise Data',
            data: getCurrentData2(),
            backgroundColor: 'rgba(153, 102, 255, 0.6)',
            borderWidth: 1,
            type: 'bar'
        });
    } else if (graphNum === 4) {
        datasets.push({
            label: 'Year-wise Data',
            data: getCurrentData2(),
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 2,
            fill: false,
            type: 'line'
        });
    }

    var data = {
        labels: labels,
        datasets: datasets
    };

    var options = {
        responsive: true,
        maintainAspectRatio: false,
        // ... Rest of your options
    };

    combinedChart2 = new Chart(ctx, {
        type: 'bar', // You can set the initial type here
        data: data,
        options: options
    });
}

document.getElementById('timeInterval2').addEventListener('change', function () {
    currentInterval2 = this.value;
	updateGraph2();
});

function updateGraph2() {
        showCombinedGraph2(1); // Show initial graph
    }
updateGraph2();
</script>
                </div>
				
				
				<div class="chart doughnut-chart1">
                    <h2>Today OA</h2>
					
	            <form><input type=date  class="cal1" name="" value="">To
			<input type=date class="cal1" id="dateField3" name="" value=""></form>   	
	<select class="select1" id="timeInterval3">
	<option value="day">select	</option>
    <option value="day">Day</option>
    <option value="month">Month</option>
    <option value="year">Year</option>
</select>

<div id="right">
    <button class="btn1" id="right1" onclick="showCombinedGraph3(1)">Bar Graph</button>
    <button class="btn2" id="right1" onclick="showCombinedGraph3(2)">Line Graph</button>
    <button class="btn3" id="right1" onclick="showCombinedGraph3(3)">Histogram</button>
    <button class="btn4" id="right1" onclick="showCombinedGraph3(4)">Line Chart</button>
</div>

<div id="combinedGraphContainer" style="width: 80%; margin: auto;">
    <canvas id="combinedGraphCanvas3" width="400" height="400"></canvas>
</div>

<script>
var combinedChart3;
var currentInterval3 = 'day';

function getCurrentData3() {
    if (currentInterval3 === 'day') {
        return <?php echo json_encode($dataDay4)?>;
    } else if (currentInterval3 === 'month') {
        return <?php echo json_encode($dataMonth5)?>;
    } else if (currentInterval3 === 'year') {
        return <?php echo json_encode($dataYear6)?>;
    }
}

function getCurrentLabels3() {
    if (currentInterval3 === 'day') {
        return <?php echo json_encode($labelsDay4)?>;
    } else if (currentInterval3 === 'month') {
        return <?php echo json_encode($labelsMonth5)?>;
    } else if (currentInterval3 === 'year') {
        return <?php echo json_encode($labelsYear6)?>;
    }
}

function showCombinedGraph3(graphNum) {
    var canvas = document.getElementById('combinedGraphCanvas3');
    var ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    if (combinedChart3) {
        combinedChart3.destroy();
    }

    var labels = getCurrentLabels3();
    var datasets = [];

    if (graphNum === 1) {
        datasets.push({
            label: 'Day-wise Data',
            data: getCurrentData3(),
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            type: 'bar'
        });
    } else if (graphNum === 2) {
        datasets.push({
            label: 'Month-wise Data',
            data: getCurrentData3(),
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false,
            type: 'line'
        });
    } else if (graphNum === 3) {
        datasets.push({
            label: 'Year-wise Data',
            data: getCurrentData3(),
            backgroundColor: 'rgba(153, 102, 255, 0.6)',
            borderWidth: 1,
            type: 'bar'
        });
    } else if (graphNum === 4) {
        datasets.push({
            label: 'Year-wise Data',
            data: getCurrentData3(),
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 2,
            fill: false,
            type: 'line'
        });
    }

    var data = {
        labels: labels,
        datasets: datasets
    };

    var options = {
        responsive: true,
        maintainAspectRatio: false,
        // ... Rest of your options
    };

    combinedChart3 = new Chart(ctx, {
        type: 'bar', // You can set the initial type here
        data: data,
        options: options
    });
}

document.getElementById('timeInterval3').addEventListener('change', function () {
    currentInterval3 = this.value;
	updateGraph3();
});

function updateGraph3() {
        showCombinedGraph3(1); // Show initial graph
    }
updateGraph3();
</script>
					
                </div>
				<div class="chart doughnut-chart">
				<h2>Today Invoice</h2>
            <form><input type=date  class="cal1" name="" value="">To
			<input type=date class="cal1" id="dateField4" name="" value=""></form>   	
	<select class="select1" id="timeInterval4">
	<option value="day">select	</option>
    <option value="day">Day</option>
    <option value="month">Month</option>
    <option value="year">Year</option>
</select>

<div id="right">
    <button class="btn1" id="right1" onclick="showCombinedGraph4(1)">Bar Graph</button>
    <button class="btn2" id="right1" onclick="showCombinedGraph4(2)">Line Graph</button>
    <button class="btn3" id="right1" onclick="showCombinedGraph4(3)">Histogram</button>
    <button class="btn4" id="right1" onclick="showCombinedGraph4(4)">Line Chart</button>
</div>

<div id="combinedGraphContainer" style="width: 80%; margin: auto;">
    <canvas id="combinedGraphCanvas4" width="400" height="400"></canvas>
</div>

<script>
var combinedChart4;
var currentInterval4 = 'day';

function getCurrentData4() {
    if (currentInterval4 === 'day') {
        return <?php echo json_encode($dataDay7)?>;
    } else if (currentInterval4 === 'month') {
        return <?php echo json_encode($dataMonth8)?>;
    } else if (currentInterval4 === 'year') {
        return <?php echo json_encode($dataYear9)?>;
    }
}

function getCurrentLabels4() {
    if (currentInterval4 === 'day') {
        return <?php echo json_encode($labelsDay7)?>;
    } else if (currentInterval4 === 'month') {
        return <?php echo json_encode($labelsMonth8)?>;
    } else if (currentInterval4 === 'year') {
        return <?php echo json_encode($labelsYear9)?>;
    }
}

function showCombinedGraph4(graphNum) {
    var canvas = document.getElementById('combinedGraphCanvas4');
    var ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    if (combinedChart4) {
        combinedChart4.destroy();
    }

    var labels = getCurrentLabels4();
    var datasets = [];

    if (graphNum === 1) {
        datasets.push({
            label: 'Day-wise Data',
            data: getCurrentData4(),
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            type: 'bar'
        });
    } else if (graphNum === 2) {
        datasets.push({
            label: 'Month-wise Data',
            data: getCurrentData4(),
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false,
            type: 'line'
        });
    } else if (graphNum === 3) {
        datasets.push({
            label: 'Year-wise Data',
            data: getCurrentData4(),
            backgroundColor: 'rgba(153, 102, 255, 0.6)',
            borderWidth: 1,
            type: 'bar'
        });
    } else if (graphNum === 4) {
        datasets.push({
            label: 'Year-wise Data',
            data: getCurrentData4(),
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 2,
            fill: false,
            type: 'line'
        });
    }

    var data = {
        labels: labels,
        datasets: datasets
    };

    var options = {
        responsive: true,
        maintainAspectRatio: false,
        // ... Rest of your options
    };

    combinedChart4 = new Chart(ctx, {
        type: 'bar', // You can set the initial type here
        data: data,
        options: options
    });
}

document.getElementById('timeInterval4').addEventListener('change', function () {
    currentInterval4 = this.value;
	updateGraph4();
});

function updateGraph4() {
        showCombinedGraph4(1); // Show initial graph
    }
updateGraph4();
</script>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>