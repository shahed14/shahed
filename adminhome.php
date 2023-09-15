<?php
// Include the necessary files and establish database connection
include "database_connection.php";

// Function to display total users
function displayTotalUsers()
{
    global $connection;

    $query = "SELECT COUNT(*) AS total_users FROM users";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalUsers = $row['total_users'];

        echo $totalUsers;
    } else {
        echo "0";
    }
}

// Function to display total products
function displayTotalProducts()
{
    global $connection;

    $query = "SELECT COUNT(*) AS total_products FROM products";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalProducts = $row['total_products'];

        echo $totalProducts;
    } else {
        echo "0";
    }
}

// Function to display total sales
function displayTotalSales()
{
    global $connection;

    $query = "SELECT COUNT(*) AS total_sales FROM sales";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalSales = $row['total_sales'];

        echo $totalSales;
    } else {
        echo "0";
    }
}

// Function to display total offers
function displayTotalOffers()
{
    global $connection;

    $query = "SELECT COUNT(*) AS total_offers FROM offers";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalOffers = $row['total_offers'];

        echo $totalOffers;
    } else {
        echo "0";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      body{
        font-family: cursive;
      }
        .card-title {
            font-size: 20px;
            color: #333;
            font-weight: bold;
        }

        .card-text {
            font-size: 36px;
            color: #555;
            margin-top: 10px;
        }
        a{
          font-size: 16px;
          font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Affiliate Marketing Platform (Admin area)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>

    <hr>

    <!-- Navigation Menu -->
    <div class="row">
        <div class="col-md-3">
            <div class="admin-sidebar mt-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#" class="text-primary font-weight-bold">Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="usersDash.php">Users</a>
                    </li>
                    <li class="list-group-item">
                        <a href="productDash.php">Products</a>
                    </li>
                    <li class="list-group-item">
                        <a href="salesDash.php">Sales</a>
                    </li>
                    <li class="list-group-item">
                        <a href="offersDash.php">Offers</a>
                    </li>
                    <li class="list-group-item">
                        <a href="ordersDash.php">Orders</a>
                    </li>
                    <li class="list-group-item">
                        <a href="payoutDash.php">Payouts</a>
                    </li>
                    <li class="list-group-item">
                        <a href="reportsDash.php">Reports</a>
                    </li>
                    <li class="list-group-item">
                        <a href="settingsDash.php" class="text-primary font-weight-bold">Settings</a>
                    </li>
                    <li class="list-group-item">
                        <a href="logout.php" class="text-primary font-weight-bold">Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text"><?php displayTotalUsers(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Products</h5>
                            <p class="card-text"><?php displayTotalProducts(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Sales</h5>
                            <p class="card-text"><?php displayTotalSales(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Offers</h5>
                            <p class="card-text"><?php displayTotalOffers(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
