<?php
// Include the necessary files and establish database connection
include "database_connection.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission
    $orderId = $_POST['order_id'];
    $customerName = $_POST['customer_name'];
    $orderDate = $_POST['order_date'];
    $status = $_POST['status'];

    // Implement logic to update the order details in the "orders" table
    $query = "UPDATE orders SET customer_name = '$customerName', order_date = '$orderDate', status = '$status' WHERE id = $orderId";
    $result = $connection->query($query);

    if ($result) {
        $message = "Order updated successfully!";

    } else {
        $message = "Error updating order.";
    }
}

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
    <title>Edit Order</title>
    <!-- Include necessary CSS and JavaScript files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <!-- Edit Order Content -->
    <div class="container">
        <h2>Edit Order</h2>

        <?php if (isset($message)) { ?>
            <div class="alert alert-danger"><?php echo $message; ?>
                <a href="ordersDash.php" class="btn btn-primary">back</a>
            </div>
        <?php } ?>

        <?php if (isset($order)) { ?>
            <form method="POST" action="editOrder.php">
                <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">

                <div class="mb-3">
                    <label class="form-label">Customer Name</label>
                    <input type="text" class="form-control" name="customer_name" value="<?php echo $order['customer_name']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Order Date</label>
                    <input type="text" class="form-control" name="order_date" value="<?php echo $order['order_date']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Order Status</label>
                    <select name="status" class="form-select">
                        <option value="processed" <?php echo $order['status'] === 'processed' ? 'selected' : ''; ?>>Processed</option>
                        <option value="shipped" <?php echo $order['status'] === 'shipped' ? 'selected' : ''; ?>>Shipped</option>
                        <option value="delivered" <?php echo $order['status'] === 'delivered' ? 'selected' : ''; ?>>Delivered</option>
                        <option value="canceled" <?php echo $order['status'] === 'canceled' ? 'selected' : ''; ?>>Canceled</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Order</button>
            </form>
        <?php } ?>
    </div>

    <!-- Include necessary JavaScript files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
