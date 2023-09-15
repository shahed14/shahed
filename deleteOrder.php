<?php
// Include the necessary files and establish database connection
include "database_connection.php";

// Check if the offer ID is provided
if (isset($_POST['id'])) {
    $orderId = $_POST['id'];

    // Delete the offer from the database
    $query = "DELETE FROM orders WHERE id = $orderId ";
    $result = $connection->query($query);

    if ($result) {
          header("Location: ordersDash.php");

    } else {
        echo "Error deleting offer: " . $connection->error;
    }
} else {
    echo "Invalid offer ID!";
    exit;
}
?>
