<?php
include "database_connection.php";

// Function to retrieve orders data
function getOrdersData() {
    global $connection;

    // Implement logic to fetch orders data from the "orders" table
    $query = "SELECT * FROM orders";
    $result = $connection->query($query);

    $ordersData = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ordersData[] = $row;
        }
    }

    return $ordersData;
}

// Function to update order status
function updateOrderStatus($orderId, $status) {
    global $connection;

    // Implement logic to update the order status in the "orders" table
    $query = "UPDATE orders SET status = '$status' WHERE id = $orderId";
    $result = $connection->query($query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Function to delete order
function deleteOrder($orderId) {
    global $connection;

    // Implement logic to delete the order from the "orders" table
    $query = "DELETE FROM orders WHERE id = $orderId";
    $result = $connection->query($query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Check if the form is submitted for updating order status
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission
    $orderId = $_POST['order_id'];
    $status = $_POST['status'];

    // Call the function to update the order status
    $success = updateOrderStatus($orderId, $status);
    if ($success) {
        $message = "Order status updated successfully!";
    } else {
        $message = "Error updating order status.";
    }
}

// Check if the order delete form is submitted
if (isset($_POST['delete_order_id'])) {
    $deleteOrderId = $_POST['delete_order_id'];

    // Call the function to delete the order
    $success = deleteOrder($deleteOrderId);
    if ($success) {
        $message = "Order deleted successfully!";
    } else {
        $message = "Error deleting order.";
    }
}

// Get orders data
$ordersData = getOrdersData();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Orders Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand " href="#">Orders  Management Dashboard</a>
    <a href="adminhome.php" class="btn btn-primary">go to home</a>
  </nav>
  <br>
  <br>

    <!-- Orders Dashboard Content -->
    <div class="container">

        <?php if (isset($message)) { ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
        <?php } ?>

        <!-- Order List -->
        <div>
            <h4>Order List</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fetch and loop through orders data to populate the table -->
                    <?php foreach ($ordersData as $order) { ?>
                        <tr>
                            <td><?php echo $order['id']; ?></td>
                            <td><?php echo $order['customer_name']; ?></td>
                            <td><?php echo $order['order_date']; ?></td>
                            <td><?php echo $order['status']; ?></td>
                            <td>
                                <a href="orderDetails.php?id=<?php echo $order['id']; ?>" class="btn btn-primary">Details</a>
                                <a href="editOrder.php?id=<?php echo $order['id']; ?>" class="btn btn-primary">Edit</a>
                                <form method="POST" action="ordersDash.php" style="display: inline-block;">
                                    <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                    <select name="status" onchange="this.form.submit()">
                                        <option value="processed" <?php echo ($order['status'] === 'processed') ? 'selected' : ''; ?>>Processed</option>
                                        <option value="shipped" <?php echo ($order['status'] === 'shipped') ? 'selected' : ''; ?>>Shipped</option>
                                        <option value="delivered" <?php echo ($order['status'] === 'delivered') ? 'selected' : ''; ?>>Delivered</option>
                                        <option value="canceled" <?php echo ($order['status'] === 'canceled') ? 'selected' : ''; ?>>Canceled</option>
                                    </select>
                                </form>
                                <form method="POST" action="deleteOrder.php?id=<?php echo $order['id']; ?>" style="display: inline-block;">
                              <input type="hidden" name="delete_order_id" value="<?php echo $order['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
