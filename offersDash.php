<?php
include "database_connection.php";
// Function to add a new offer
function addOffer($name, $description, $commission, $startDate, $endDate) {
    global $connection;
    
    // Implement logic to insert the offer data into the "offers" table
    $query = "INSERT INTO offers (name, description, commission_rate, start_date, end_date) VALUES ('$name', '$description', $commission, '$startDate', '$endDate')";
    
    // Execute the query
    $result = $connection->query($query);

    if ($result) {
        echo "added successfully";
    } else {
        echo "Error adding offer: " . $connection->error;
    }
}

// Function to retrieve offers data
function getOffersData() {
    global $connection;

    // Implement logic to fetch offers data from the "offers" table
    $query = "SELECT * FROM offers";
    $result = $connection->query($query);

    $offersData = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $offersData[] = $row;
        }
    }

    return $offersData;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission
    $name = $_POST['name'];
    $description = $_POST['description'];
    $commission = $_POST['commission'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Call the function to add the new offer
    addOffer($name, $description, $commission, $startDate, $endDate);
}

// Get offers data
$offersData = getOffersData();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Offers Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand " href="#">Offers  Management Dashboard</a>
    <a href="adminhome.php" class="btn btn-primary">go to home</a>
  </nav>
  <br>
  <br>
  <!-- Offers Dashboard Content -->
  <div class="container">

    <!-- Add New Offer Form -->
    <div class="card">
      <div class="card-header">
        <h4>Add New Offer</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="offersDash.php">
          <div class="mb-3">
            <label for="name" class="form-label">Offer Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
          </div>
          <div class="mb-3">
            <label for="commission" class="form-label">Commission Rate</label>
            <input type="number" name="commission" id="commission" class="form-control" step="0.01" required>
          </div>
          <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Add Offer</button>
        </form>
      </div>
    </div>

    <!-- List of Offers -->
    <div class="card mt-4">
      <div class="card-header">
        <h4>Offers List</h4>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Commission Rate</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Fetch and loop through offers data to populate the table -->
            <?php foreach ($offersData as $offer) { ?>
              <tr>
                <td><?php echo $offer['name']; ?></td>
                <td><?php echo $offer['description']; ?></td>
                <td><?php echo $offer['commission_rate']; ?></td>
                <td><?php echo $offer['start_date']; ?></td>
                <td><?php echo $offer['end_date']; ?></td>
                <td>
                  <a href="editOffer.php?id=<?php echo $offer['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                  <a href="deleteOffer.php?id=<?php echo $offer['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                  <a href="offerDetails.php?id=<?php echo $offer['id']; ?>" class="btn btn-info btn-sm">Details</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
