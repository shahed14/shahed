<?php
// Include the necessary files and establish database connection
include "database_connection.php";

// Define variables to hold the success message
$successMessage = "";

// Check if the offer ID is provided
if (isset($_GET['id'])) {
    $offerId = $_GET['id'];

    // Fetch the offer data from the database
    $query = "SELECT * FROM offers WHERE id = $offerId";
    $result = $connection->query($query);

    if ($result->num_rows == 1) {
        $offer = $result->fetch_assoc();
    } else {
        echo "Offer not found!";
        exit;
    }
} else {
    echo "Invalid offer ID!";
    exit;
}

// Function to update the offer
function updateOffer($offerId, $name, $description, $commission, $startDate, $endDate) {
    global $connection, $successMessage;

    // Implement logic to update the offer data in the "offers" table
    $query = "UPDATE offers SET name = '$name', description = '$description', commission_rate = $commission, start_date = '$startDate', end_date = '$endDate' WHERE id = $offerId";

    // Execute the query
    $result = $connection->query($query);

    if ($result) {
        $successMessage = "Offer updated successfully!";
    } else {
        $successMessage = "Error updating offer: " . $connection->error;
    }
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission
    $name = $_POST['name'];
    $description = $_POST['description'];
    $commission = $_POST['commission'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Call the function to update the offer
    updateOffer($offerId, $name, $description, $commission, $startDate, $endDate);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Offer</title>
  <!-- Include necessary CSS and JavaScript files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
  <!-- Edit Offer Content -->
  <div class="container">
    <h2>Edit Offer</h2>

    <div class="card">
      <div class="card-header">
        <h4>Edit Offer Details</h4>
      </div>
      <div class="card-body">
        <?php if (!empty($successMessage)) { ?>
          <!-- Display success message -->
          <div class="alert alert-success" role="alert">
            <?php echo $successMessage; ?>
          </div>
        <?php } ?>
        <form method="POST" action="editOffer.php?id=<?php echo $offerId; ?>">
          <div class="mb-3">
            <label for="name" class="form-label">Offer Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $offer['name']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" required><?php echo $offer['description']; ?></textarea>
          </div>
          <div class="mb-3">
            <label for="commission" class="form-label">Commission Rate</label>
            <input type="number" name="commission" id="commission" class="form-control" step="0.01" value="<?php echo $offer['commission_rate']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="<?php echo $offer['start_date']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" value="<?php echo $offer['end_date']; ?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Update Offer</button>
          <a href="offersDash.php" class="btn btn-primary">back</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Include necessary JavaScript files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
