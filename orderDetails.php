<?php
// Include the necessary files and establish database connection
include "database_connection.php";

// Get the order details
if (isset($_GET['id'])) {
    $orderId = $_GET['id'];

    // Implement logic to fetch the order details from the "orders" table
    $query = "SELECT * FROM orders WHERE id = $orderId";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $order = $result->fetch_assoc();
    } else {
        $message = "Order not found.";
    }
}

// Close the database connection
$connection->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <!-- Include necessary CSS and JavaScript files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <!-- Order Details Content -->
    <div class="container">
        <h2>Order Details</h2>

        <?php if (isset($message)) { ?>
            <div class="alert alert-danger"><?php echo $message; ?></div>
        <?php } ?>

        <?php if (isset($order)) { ?>
            <div class="mb-3">
                <label class="form-label">Order ID</label>
                <input type="text" class="form-control" value="<?php echo $order['id']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" value="<?php echo $order['customer_name']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Order Date</label>
                <input type="text" class="form-control" value="<?php echo $order['order_date']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Order Status</label>
                <input type="text" class="form-control" value="<?php echo $order['status']; ?>" readonly>
            </div>
            <div class = "mb-3">
                <a href="ordersDash.php" class="btn btn-primary">back</a>

        <?php } ?>
    </div>

    <!-- Include necessary JavaScript files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
