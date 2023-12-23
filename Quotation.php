<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="styleEn.css">
    <title>Admin panel</title>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
      // Get today's date
      const today = new Date().toISOString().split('T')[0];

      // Set the default date
      document.getElementById('dateField').value = today;
	  document.getElementById('dateField1').value = today;
    });	
  </script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <style>
  .cal1
{	
	margin:1px 0px 0px 5px;
	text-align:center;
	font-size:15px;
	width:110px;
	height:20px;
}

table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

}



</style>
</head>
<body>





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
                <li class="active">
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
                <li >
                    <a  href="Invoice.php">
                        <i class="fas fa-cart-arrow-down"></i>
                        <div>Invoice</div>
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="main">
		<div class="table">
            
			 <?php
    // Establish a database connection
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Empty password
    $dbname = "admin";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query the database to retrieve the data (without WHERE clause)
    $query = "SELECT id, quote,enq, quotedate,ccategory FROM db_quote"; // Remove the WHERE clause

    $stmt = $conn->prepare($query);
    $stmt->execute();

    // Bind the results
    $stmt->bind_result($employeeId, $employeeName, $mobileNumber,$ccategory,$custid);

    // Fetch the data and display it in a table
    echo "<h1>Custmer Qoutation Details</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Quote ID</th><th>Enq</th><th>Category</th><th>quote</th><th>quotedate</th></tr>";

    while ($stmt->fetch()) {
        echo "<tr>";
        echo "<td>$employeeId</td>";
        echo "<td>$employeeName</td>";
		echo "<td>$custid</td>";
        echo "<td>$mobileNumber</td>";
		echo "<td>$ccategory</td>";
        echo "</tr>";
    }

    echo "</table>";

    $stmt->close();
    ?>

    <?php
    // Close the database connection
    $conn->close();
    ?>
			
			
			
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

</body>
</html>