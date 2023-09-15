<?php
// Include the necessary files and establish database connection
include "database_connection.php";

// Function to add a new payout
function addPayout($affiliateName, $earnings, $payoutSchedule, $payoutMethod, $status) {
    global $connection;

    // Implement logic to insert the new payout into the "payouts" table
    $query = "INSERT INTO payouts (affiliate_name, earnings, payout_arrangment, payout_method, status) VALUES ('$affiliateName', $earnings, '$payoutSchedule', '$payoutMethod', '$status')";
    $result = $connection->query($query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Check if the add payout form is submitted
if (isset($_POST['add_payout'])) {
    $affiliateName = $_POST['affiliate_name'];
    $earnings = $_POST['earnings'];
    $payoutSchedule = $_POST['payout_arrangment'];
    $payoutMethod = $_POST['payout_method'];
    $status = $_POST['status'];

    // Call the function to add the payout
    $success = addPayout($affiliateName, $earnings, $payoutSchedule, $payoutMethod, $status);
    if ($success) {
        $message = "Payout added successfully!";
    } else {
        $message = "Error adding payout.";
    }
}

// Redirect back to the payouts dashboard with the message
header("Location: payoutDash.php?message=" . urlencode($message));
exit();
