<?php
// Include the necessary files and establish database connection
include "database_connection.php";

// Function to retrieve a single payout by ID
function getPayoutById($payoutId) {
    global $connection;

    // Implement logic to fetch a single payout from the "payouts" table by ID
    $query = "SELECT * FROM payouts WHERE id = $payoutId";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $payout = $result->fetch_assoc();
        return $payout;
    } else {
        return null;
    }
}

// Function to edit payout
function editPayout($payoutId, $earnings, $payoutSchedule, $payoutMethod, $status) {
    global $connection;

    // Implement logic to edit the payout in the "payouts" table
    $query = "UPDATE payouts SET earnings = '$earnings', payout_arrangment = '$payoutSchedule', 
              payout_method = '$payoutMethod', status = '$status' WHERE id = $payoutId";
    $result = $connection->query($query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Check if the payout ID is provided
if (isset($_POST['payout_id'])) {
    $payoutId = $_POST['payout_id'];

    // Retrieve the payout by ID
    $payout = getPayoutById($payoutId);

    if (!$payout) {
        // Payout not found, redirect to payoutDash.php with an error message
        header("Location: payoutDash.php?message=Payout%20not%20found.");
        exit();
    }
} else {
    // Payout ID not provided, redirect to payoutDash.php with an error message
    header("Location: payoutDash.php?message=Payout%20ID%20not%20provided.");
    exit();
}

// Check if the edit payout form is submitted
if (isset($_POST['edit_payout'])) {
    $earnings = $_POST['earnings'];
    $payoutSchedule = $_POST['payout_arrangment'];
    $payoutMethod = $_POST['payout_method'];
    $status = $_POST['status'];

    // Call the function to edit the payout
    $success = editPayout($payoutId, $earnings, $payoutSchedule, $payoutMethod, $status);

    if ($success) {
        // Redirect to payoutDash.php with a success message
        header("Location: payoutDash.php?message=Payout%20updated%20successfully.");
        exit();
    } else {
        // Redirect to payoutDash.php with an error message
        header("Location: payoutDash.php?message=Error%20updating%20payout.");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Payout</title>
    <!-- Include necessary CSS and JavaScript files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Display an alert message if provided in the URL
            var message = '<?php echo isset($_GET["message"]) ? $_GET["message"] : ""; ?>';
            if (message !== "") {
                alert(message);
            }
            
            // Return to payoutDash.php after 3 seconds
            setTimeout(function() {
                window.location.href = "payoutDash.php";
            }, 3000);
        });
    </script>
</head>
<body>
    <!-- Edit Payout Form -->
    <div class="container">
        <h2>Edit Payout</h2>

        <?php if (isset($message)) { ?>
            <div class="alert alert-danger"><?php echo $message; ?></div>
        <?php } ?>

        <?php if (isset($payout)) { ?>
            <form method="POST" action="editPayout.php">
                <input type="hidden" name="payout_id" value="<?php echo $payout['id']; ?>">
                <div class="mb-3">
                    <label class="form-label">Earnings</label>
                    <input type="number" class="form-control" name="earnings" step="0.01" value="<?php echo $payout['earnings']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Payout Schedule</label>
                    <select name="payout_arrangment" class="form-select" required>
                        <option value="weekly" <?php if ($payout['payout_arrangment'] === 'weekly') echo 'selected'; ?>>Weekly</option>
                        <option value="monthly" <?php if ($payout['payout_arrangment'] === 'monthly') echo 'selected'; ?>>Monthly</option>
                        <option value="quarterly" <?php if ($payout['payout_arrangment'] === 'quarterly') echo 'selected'; ?>>Quarterly</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Payout Method</label>
                    <select name="payout_method" class="form-select" required>
                        <option value="paypal" <?php if ($payout['payout_method'] === 'paypal') echo 'selected'; ?>>PayPal</option>
                        <option value="bank_transfer" <?php if ($payout['payout_method'] === 'bank_transfer') echo 'selected'; ?>>Bank Transfer</option>
                        <option value="check" <?php if ($payout['payout_method'] === 'check') echo 'selected'; ?>>Check</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="pending" <?php if ($payout['status'] === 'pending') echo 'selected'; ?>>Pending</option>
                        <option value="approved" <?php if ($payout['status'] === 'approved') echo 'selected'; ?>>Approved</option>
                        <option value="rejected" <?php if ($payout['status'] === 'rejected') echo 'selected'; ?>>Rejected</option>
                    </select>
                </div>
                <button type="submit" name="edit_payout" class="btn btn-primary">Update Payout</button>
            </form>
        <?php } ?>
    </div>
</body>
</html>
