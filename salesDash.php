<?php



// Include the necessary files and establish database connection
require_once 'database_connection.php';

// Function to retrieve sales data
function getSalesData() {
    global $connection; // Access the $mysqli variable from database_connection.php

    // Prepare and execute the SQL query
    $sql = "SELECT start_date,end_date, revenue FROM sales ";
    $result = $connection->query($sql);

    // Fetch all rows as an associative array
    $salesData = array();
    while ($row = $result->fetch_assoc()) {
        $salesData[] = $row;
    }

    // Free the result set
    $result->free();

    return $salesData;
}



// Function to calculate total revenue
function calculateTotalRevenue() {
    $salesData = getSalesData();
    $totalRevenue = 0;

    foreach ($salesData as $sale) {
        $totalRevenue += $sale['revenue'];
    }

    return $totalRevenue;
}

// Function to retrieve top-selling products
function getTopSellingProducts() {
    global $connection; // Access the $connection variable from database_connection.php

    // Prepare and execute the SQL query
    $sql = "SELECT p.name, SUM(s.quantity) as quantity 
            FROM sales  s
            INNER JOIN products p ON s.product_id = p.id
            GROUP BY s.product_id 
            ORDER BY quantity DESC 
            LIMIT 5";
    $result = $connection->query($sql);

    if (!$result) {
        // Query execution failed, handle the error
        echo "Error: " . $connection->error;
        return null; // Return null or an empty array, depending on your error handling approach
    }

    // Fetch all rows as an associative array
    $topSellingProducts = array();
    while ($row = $result->fetch_assoc()) {
        $topSellingProducts[] = $row;
    }

    // Free the result set
    $result->free_result();

    return $topSellingProducts;
}




/// Function to retrieve sales by date range
function getSalesByDateRange($startDate, $endDate) {
    global $connection; // Access the $connection variable from database_connection.php

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM sales  WHERE order_date >= ? AND order_date <= ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $startDate, $endDate);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        // Query execution failed, handle the error
        echo "Error: " . $connection->error;
        return null; // Return null or an empty array, depending on your error handling approach
    }

    // Fetch all rows as an associative array
    $salesByDateRange = array();
    while ($row = $result->fetch_assoc()) {
        $salesByDateRange[] = $row;
    }

    // Free the result set
    $result->free_result();

    return $salesByDateRange;
}


// Get sales data
$salesData = getSalesData();

// Calculate total revenue
$totalRevenue = calculateTotalRevenue();

// Get top-selling products
$topSellingProducts = getTopSellingProducts();

// Get sales by date range (example: last 7 days)
$startDate = date('Y-m-d', strtotime('-7 days'));
$endDate = date('Y-m-d');
$salesByDateRange = getSalesByDateRange($startDate, $endDate);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sales Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 50px;
    }
    .card {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand " href="">Sales  Management Dashboard</a>
    <a  class="btn btn-primary" href="adminhome.php" >go to home</a>
  </nav>
  <!-- Sales Dashboard Content -->
  <div class="container">

    <!-- Total Revenue -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Total Revenue</h4>
        <h5 class="card-text"><?php echo $totalRevenue; ?></h5>
      </div>
    </div>

    <!-- Top Selling Products -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Top Selling Products</h4>
        <ul class="list-group">
          <?php foreach ($topSellingProducts as $product) { ?>
            <li class="list-group-item"><?php echo $product['name']; ?> - <?php echo $product['quantity']; ?></li>
          <?php } ?>
        </ul>
      </div>
    </div>

    <!-- Sales by Date Range -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Sales by Date Range</h4>
        <form class="mb-3" method="POST" action="salesDash.php">
          <div class="row">
            <div class="col-md-4">
              <input type="date" name="startDate" class="form-control" required>
            </div>
            <div class="col-md-4">
              <input type="date" name="endDate" class="form-control" required>
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary">Filter</button>
            </div>
          </div>
        </form>
        <table class="table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Revenue</th>
              <!-- Add other relevant columns -->
            </tr>
          </thead>
          <tbody>
            <?php foreach ($salesByDateRange as $sale) { ?>
              <tr>
                <td><?php echo $sale['order_date']; ?></td>
                <td><?php echo $sale['revenue']; ?></td>
                <!-- Add other relevant columns -->
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Include necessary JavaScript files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
