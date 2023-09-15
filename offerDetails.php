<?php
// Include the necessary files and establish database connection
include "database_connection.php";

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
?>

<!DOCTYPE html>
<html>
<head>
  <title>Offer Details</title>
  <!-- Include necessary CSS and JavaScript files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
  <!-- Offer Details Content -->
  <div class="container">
    <h2>Offer Details</h2>

    <div class="card">
      <div class="card-header">
        <h4><?php echo $offer['name']; ?></h4>
      </div>
      <div class="card-body">
        <p><strong>Description:</strong> <?php echo $offer['description']; ?></p>
        <p><strong>Commission Rate:</strong> <?php echo $offer['commission_rate']; ?></p>
        <p><strong>Start Date:</strong> <?php echo $offer['start_date']; ?></p>
        <p><strong>End Date:</strong> <?php echo $offer['end_date']; ?></p>
      </div>
      <div class="card-footer">
        <a href="offersDash.php" class="btn btn-secondary">Back to Offers</a>
      </div>
    </div>
  </div>

  <!-- Include necessary JavaScript files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
