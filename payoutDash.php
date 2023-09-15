<?php
include "database_connection.php";

// Function to retrieve payouts data
function getPayoutsData() {
    global $connection;

    // Implement logic to fetch payouts data from the "payouts" table
    $query = "SELECT * FROM payouts";
    $result = $connection->query($query);

    $payoutsData = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $payoutsData[] = $row;
        }
    }

    return $payoutsData;
}

// Function to add payout
function addPayout($affiliateName, $earnings, $payoutSchedule, $payoutMethod, $status) {
    global $connection;

    // Implement logic to add the payout to the "payouts" table
    $query = "INSERT INTO payouts (affiliate_name, earnings, payout_arrangment, payout_method, status) 
              VALUES ('$affiliateName', '$earnings', '$payoutSchedule', '$payoutMethod', '$status')";
    $result = $connection->query($query);

    if ($result) {
        return true;
    } else {
        return false;
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

// Check if the edit payout form is submitted
if (isset($_POST['edit_payout'])) {
    $payoutId = $_POST['payout_id'];
    $earnings = $_POST['earnings'];
    $payoutSchedule = $_POST['payout_arrangment'];
    $payoutMethod = $_POST['payout_method'];
    $status = $_POST['status'];

    // Call the function to edit the payout
    $success = editPayout($payoutId, $earnings, $payoutSchedule, $payoutMethod, $status);
    if ($success) {
        $message = "Payout updated successfully!";
    } else {
        $message = "Error updating payout.";
    }
}

// Check if the payout delete form is submitted
if (isset($_POST['delete_payout_id'])) {
    $deletePayoutId = $_POST['delete_payout_id'];

    // Call the function to delete the payout
    $success = deletePayout($deletePayoutId);
    if ($success) {
        $message = "Payout deleted successfully!";
    } else {
        $message = "Error deleting payout.";
    }
}

// Get payouts data
$payoutsData = getPayoutsData();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payouts Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand " href="#">payouts  Management Dashboard</a>
    <a href="adminhome.php" class="btn btn-primary">go to home</a>
  </nav>
  <br>
  <br>
    <!-- Payouts Dashboard Content -->
    <div class="container">

        <?php if (isset($message)) { ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
        <?php } ?>

        <!-- Payout List -->
        <div>
            <h4>Payout List</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Payout ID</th>
                        <th>Affiliate Name</th>
                        <th>Earnings</th>
                        <th>Payout Schedule</th>
                        <th>Payout Method</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fetch and loop through payouts data to populate the table -->
                    <?php foreach ($payoutsData as $payout) { ?>
                        <tr>
                            <td><?php echo $payout['id']; ?></td>
                            <td><?php echo $payout['affiliate_name']; ?></td>
                            <td><?php echo $payout['earnings']; ?></td>
                            <td><?php echo $payout['payout_arrangment']; ?></td>
                            <td><?php echo $payout['payout_method']; ?></td>
                            <td><?php echo $payout['status']; ?></td>
                            <td>
                                <form method="POST" action="editPayout.php" style="display: inline-block;">
                                    <input type="hidden" name="payout_id" value="<?php echo $payout['id']; ?>">
                                    <input type="number" name="earnings" value="<?php echo $payout['earnings']; ?>" required>
                                    <input type="text" name="payout_arrangment" value="<?php echo $payout['payout_arrangment']; ?>" required>
                                    <input type="text" name="payout_method" value="<?php echo $payout['payout_method']; ?>" required>
                                    <input type="text" name="status" value="<?php echo $payout['status']; ?>" required>
                                    <button type="submit" name="edit_payout" class="btn btn-primary">Edit</button>
                                </form>
                                <form method="POST" action="deletePayout.php" style="display: inline-block;">
                                    <input type="hidden" name="delete_payout_id" value="<?php echo $payout['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Add Payout Form -->
        <div>
            <h4>Add Payout</h4>
            <form method="POST" action="addPayout.php">
                <div class="mb-3">
                    <label for="affiliate_name" class="form-label">Affiliate Name:</label>
                    <input type="text" class="form-control" id="affiliate_name" name="affiliate_name" required>
                </div>
                <div class="mb-3">
                    <label for="earnings" class="form-label">Earnings:</label>
                    <input type="number" class="form-control" id="earnings" name="earnings" required>
                </div>
                <div class="mb-3">
                <label class="form-label">Payout Schedule</label>
                <select name="payout_schedule" class="form-select" required>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="quarterly">Quarterly</option>
                </select>
            </div>
                <div class="mb-3">
                <label class="form-label">Payout Method</label>
                <select name="payout_method" class="form-select" required>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                    <option value="check">Check</option>
                </select>
            </div>
                <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>
                <button type="submit" name="add_payout" class="btn btn-primary">Add Payout</button>
            </form>
        </div>
    </div>
</body>
</html>
