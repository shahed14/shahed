<?php
// Include the necessary files and establish database connection
include "database_connection.php";

// Function to delete payout
function deletePayout($payoutId) {
    global $connection;

    // Implement logic to delete the payout from the "payouts" table
    $query = "DELETE FROM payouts WHERE id = $payoutId";
    $result = $connection->query($query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Check if the payout delete form is submitted
if (isset($_POST['delete_payout_id'])) {
    $deletePayoutId = $_POST['delete_payout_id'];

    // Call the function to delete the payout
    $success = deletePayout($deletePayoutId);
    if ($success) {
        // Redirect back to payoutDash.php with success message
        header("Location: payoutDash.php?message=Payout deleted successfully!");
        exit();
    } else {
        // Redirect back to payoutDash.php with error message
        header("Location: payoutDash.php?message=Error deleting payout.");
        exit();
    }
}
?>
