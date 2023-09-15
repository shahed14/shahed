<?php
// Include the necessary files and establish database connection
include "database_connection.php";

// Check if the offer ID is provided
if (isset($_GET['id'])) {
    $offerId = $_GET['id'];

    // Delete the offer from the database
    $query = "DELETE FROM offers WHERE id = $offerId";
    $result = $connection->query($query);

    if ($result) {
          header("Location: offersDash.php");

    } else {
        echo "Error deleting offer: " . $connection->error;
    }
} else {
    echo "Invalid offer ID!";
    exit;
}
?>
